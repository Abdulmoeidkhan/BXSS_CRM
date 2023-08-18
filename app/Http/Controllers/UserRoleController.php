<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserRoleController extends Controller
{
    public function roleChanger(Request $req, $userId, $action)
    {
        $userData = User::with('roles')->where('id', $userId)->first();
        $newRole = Role::where('id', $action)->first();
        $oldRole = Role::where('id', $userData['roles'][0]['pivot']['role_id'])->first();
        $userData->removeRole($oldRole['name'], $userData['roles'][0]['pivot']['team_id']);
        $userData->addRole($newRole['name'], $userData['roles'][0]['pivot']['team_id']);
        $userUpdate = User::where('id', $userId)->update(['role'=> $newRole['name']]);
        return $userUpdate ? redirect('/userPanel')->with('statusOrTeamUpdated', 'User Status updated!') : redirect('/userPanel')->with('statusOrTeamNotUpdate', 'Some Thing Went Wrong!');
    }
}
