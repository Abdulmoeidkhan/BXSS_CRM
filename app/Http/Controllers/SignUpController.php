<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class SignUpController extends Controller
{
    public function signUp(Request $req)
    {
        $resp = 0;
        $err = "";
        $user = new User();
        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        if ($req->password === $req->confirmPass) {
            if ($req->csrf === "34821159") {
                $resp = $user->save();
            } else {
                $err =  "CSRF is not correct";
            }
        } else if ($req->password !== $req->confirmPass) {
            $err =  "Password does not match";
        }
        return $resp ? $resp : $err;
    }
}
