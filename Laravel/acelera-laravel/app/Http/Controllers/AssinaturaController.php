<?php

namespace App\Http\Controllers;

use App\Models\Assinatura;

class AssinaturaController extends Controller
{
    public function index()
    {
        $assinaturas = Assinatura::all();

        return view('admin.assinatura.index', compact('assinaturas'));
    }

    public function show($id)
    {
        $assinatura = Assinatura::find($id);

        return view('admin.assinatura.show', compact('assinatura'));
    }
}