<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;

class UserUpdateController extends Controller
{
    public function statusChanger(Request $req, $userId, $action)
    {
        $userUpdate = User::where('id', $userId)->update(['status' => $action]);
        return $userUpdate ? redirect('/userPanel')->with('statusUpdated', 'User Status updated!') : redirect('/userPanel')->with('statusNotUpdate', 'Some Thing Went Wrong!');
    }
}
