@extends('template.single')
@section('content')
<div class="container mt-5">
  <div class="row">
      
    <div class="col-sm-12">
        <div class="row">
        <h1 class="text-white bg-primary text-center">Novo documento </h1>
     
     <hr>
<div class="col">
    <form method="post" action="/documento/create">
 <div class="text-primary"> Titulo:</div> <input type="text"  name="titulo">
 <div class="text-primary"> Tamanho: </div> <input type="text"  name="tamanho"> 
 <div class="text-primary"> Assinaturas: </div><input type="text"  name="num_assin"> 
 <div class="text-primary"> Quantidade de paginas: </div>  <input type="text"  name="qtd_paginas">
 <br><br>
 <div class="col-md-4">
 <button class="btn-primary" type="submit">Enviar</button>
 </div>
    </form>
 <br>
</div>
        </div>
</div>
<a href="/documentos">Voltar</a></div></div>
@endsection
