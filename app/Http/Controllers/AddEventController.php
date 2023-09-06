<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddEventController extends Controller
{
    function renderAddForm(Request $req){
        return view('pages.addEvent');
    }
}
