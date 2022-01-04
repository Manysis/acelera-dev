@extends('template.single')
@section('content')
<div class="container mt-5">
  <div class="row">
  <h1 class="text-white bg-primary text-center">Detalhes do documento</h1> <h1 class="text-white bg-success text-center"> {{$doc->titulo}} </h1>
     
     <hr>
    <div class="col-sm-12">
        <div class="row">
<div class="col">
 <div class="text-danger"> Titulo: {{$doc->titulo}} </div>
 <div class="text-danger"> Tamanho: {{$doc->tamanho}} </div>
 <div class="text-danger"> Assinaturas: {{$doc->num_assin}} </div>
 <div class="text-danger"> Quantidade de paginas: {{$doc->qtd_paginas}} </div>
 <br>
</div>
        </div>
</div>

<div class="col-md-3">
      <a href="/documentos" class="btn btn-success">Voltar</a>
      </div>
     </div></div>
@endsection
