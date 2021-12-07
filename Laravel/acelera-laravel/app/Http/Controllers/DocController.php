<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doc;
class DocController extends Controller
{
    function index(){
        $docs = Doc::all();
        return view('admin.doc', compact('docs'));
    }
}
