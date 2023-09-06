<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laratrust\Models\Role;
use Laratrust\Models\Team;

class DashboardController extends Controller
{
    public function dashBoardRender(Request $req)
    {
        $data = [];
        // {{Auth::user()->hasRole(['superadministrator'])&&"superadministrator"}}
        // return print_r(Auth::user()->hasRole('superadministrator'));
        // return User::where('id',Auth::user()->id)->hasRole(user);
        // return print_r(User::get(Auth::user()->name));
        return view('userDashboard', [...$data]);
        // return view('dashboard', [...$data]);
    }
}
