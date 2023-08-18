<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Team;

class UserTeamController extends Controller
{
    public function teamChanger(Request $req, $userId, $action)
    {
        $userData = User::with('roles')->where('id', $userId)->first();
        $newTeam = Team::where('id', $action)->first();
        $oldTeam = Team::where('id', $userData['roles'][0]['pivot']['team_id'])->first();
        $userData->removeRole($userData['roles'][0]['pivot']['role_id'], $oldTeam['name']);
        $userDataUpdate=$userData->addRole($userData['roles'][0]['pivot']['role_id'], $newTeam['name']);
        return $userDataUpdate ? redirect('/userPanel')->with('statusOrTeamUpdated', 'User Team updated!') : redirect('/userPanel')->with('statusOrTeamNotUpdate', 'Some Thing Went Wrong!');
        // return $userData;
    }
}
