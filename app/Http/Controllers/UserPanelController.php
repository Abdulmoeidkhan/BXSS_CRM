<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use App\Models\Role;

class UserPanelController extends Controller
{
    public function renderUserPanel(Request $req)
    {
        $team = Team::get(['id', 'display_name']);
        $role = Role::get(['id', 'display_name']);
        $users = User::with('roles')->get(['id', 'name', 'email', 'status']);
        $userArray = [];
        foreach ($users as $key => $user) {
            $requestedUser = [
                'userId' => $user['id'],
                'userName' => $user['name'],
                'userEmail' => $user['email'],
                'userRoleId' => $user['roles'][0]['id'],
                'userRoleName' =>  $user['roles'][0]['display_name'],
                'userTeamId' => $user['roles'][0]['pivot']['team_id'],
                'userTeamName' => $team[$user['roles'][0]['pivot']['team_id'] - 1]['display_name'],
                'status' => $user['status'] ==1? "Active":"Inactive"
            ];
            array_push($userArray, $requestedUser);
            // echo "<br/>";
            // echo $user['roles'][0]['pivot']['team_id'];
        }
        // return $users[0]['roles'][0];
        // return ['userArray' => $userArray, 'team' => $team];
        return view('UserPanel', ['userArray' => $userArray, 'teams' => $team,'roles'=>$role]);
        // return $userArray;
    }
}
