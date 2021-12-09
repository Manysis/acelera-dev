<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doc;
use Illuminate\Validation\Rules\Exists;

class DocController extends Controller
{
    function index(){
        $docs = Doc::all();
        return view('admin.doc.index', compact('docs'));
    } 
    public function show($id)
    {   
        $doc = Doc::findOrFail($id);
      
    return view('admin.doc.show', compact('doc'));
    }
}


