<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Laratrust\Models\Role;
use Laratrust\Models\Team;

class LoginController extends Controller
{

    // Custom Login

    public function customLogin(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $req->session()->regenerate();
            return redirect()->route('home');
        } else {
            return ['status' => 0, "msg" => 'The provided credentials do not match our records.'];
        }
    }


    //Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    //Google callback
    public function handleGoogleCallback()
    {

        $user = Socialite::driver('google')->user();
        $this->_registerorLoginUser($user);
        return redirect()->route('home');
    }

    //Facebook Login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    //facebook callback
    public function handleFacebookCallback()
    {

        $user = Socialite::driver('facebook')->user();

        $this->_registerorLoginUser($user);
        return redirect()->route('home');
    }

    //Github Login
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    //github callback
    public function handleGithubCallback()
    {

        $user = Socialite::driver('github')->user();

        $this->_registerorLoginUser($user);
        return redirect()->route('home');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', $data->email)->first();
        $team = Team::where('name', 'General_Team')->first();
        $admin = Role::where('name', 'user')->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->role='user';
            $user->save();
            $user->addRole($admin, $team);
        }
        Auth::login($user);
    }
}
