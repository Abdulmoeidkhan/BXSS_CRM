<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserUpdateController extends Controller
{
    public function statusAndNameChanger(Request $req)
    {

        $userUpdate = User::where('id', $req->modalEditUserId)->update(['status' => $req->modalEditUserStatus, 'name' => $req->modalEditUserName]);
        return $userUpdate ? redirect()->route('userPanel')->with('statusUpdated', 'User updated!') : redirect()->route('userPanel')->with('statusNotUpdate', 'Some Thing Went Wrong!');
    }
}
