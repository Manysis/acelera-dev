<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

use App\Models\Doc;
use Illuminate\Validation\Rules\Exists;

class DocController extends Controller
{
    function index(){
        $docs = Doc::all();
        Log::channel('documentos')->info('Documentos foram consultados com sucesso');
        return view('admin.doc.index', compact('docs'));
    } 
    public function show($id)
    {   
        $doc = Doc::findOrFail($id);
        Log::channel('documentos')->info('Documento exibidos consultado com sucesso');
        return view('admin.doc.show', compact('doc'));
    }
}


