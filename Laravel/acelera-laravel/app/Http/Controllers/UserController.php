<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function index(){
        $user = User::userIn();
        return view('admin.user', compact('user'));
    }
}
