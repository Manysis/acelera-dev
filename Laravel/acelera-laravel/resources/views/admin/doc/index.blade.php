@extends('template.single')

@section('content')
<div class="container mt-5">
  <div class="row">
      
<div class="col-sm-12">
      <p class="upcase">EX 100 - Usando seu conhecimento em laravel, crie uma estrutura model, view e controller na
qual você possa facilmente apresentar o nome e a idade de um usuário ao acessar a
rota “perfil”. (/perfil)
</strong>
      </div>
    <div class="col-sm-12">
        <div class="row">
@foreach ($docs as $item)
<div class="col">
  <a href="/doc/show/{{$item->id}}"> Detalhes deste documento(EX 102)</a>
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
