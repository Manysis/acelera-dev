@extends('template.single')

@section('content')
<div class="container mt-5">
  <div class="row">
      <h1 class="text-white bg-primary text-center">Documentos </h1>
     
      <hr>
      <div class="col-md-3">
      <a href="/documento/novo" class="btn btn-success">Novo</a>
      </div>
      <div class="col-sm-12">
        <div class="row">
@foreach ($docs as $item)
<div class="col">
  <a href="/documento/show/{{$item->id}}"> Detalhes deste documento(EX 102)</a>
 <div class="text-danger"> Titulo: {{$item->titulo}} </div>
 <div class="text-danger"> Tamanho: {{$item->tamanho}} </div>
 <div class="text-danger"> Assinaturas: {{$item->num_assin}} </div>
 <div class="text-danger"> Quantidade de paginas: {{$item->qtd_paginas}} </div>
 <br>
</div>
@endforeach
        </div>
</div></div></div>
@endsection
