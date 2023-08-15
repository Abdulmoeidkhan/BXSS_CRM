<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;

class UserPanelController extends Controller
{
    public function renderUserPanel(Request $req)
    {
        $team = Team::get(['id', 'display_name']);
        $users = User::with('roles')->get(['id', 'name', 'email']);
        $userArray = [];
        foreach ($users as $key => $user) {
            $requestedUser = [$user['id'], $user['name'], $user['email'], $user['roles'][0]['id'], $user['roles'][0]['display_name'], $user['roles'][0]['pivot']['team_id'],$team[$user['roles'][0]['pivot']['team_id']-1]['display_name']];
            array_push($userArray, $requestedUser);
            // echo "<br/>";
            // echo $user['roles'][0]['pivot']['team_id'];
        }
        return $userArray;
        // return $users[0]['roles'][0];
        // return view('UserPanel');
    }
}
