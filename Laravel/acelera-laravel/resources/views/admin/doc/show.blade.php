@extends('template.single')
@section('content')
<div class="container mt-5">
  <div class="row">
      
<div class="col-sm-12">
      <p class="upcase">EX 102 - Usando seus conhecimentos em laravel na view do exercício 100, implemente um
link capaz de redirecionar para uma rota que receberá o ID desse documento. Com o ID
Programa de Aceleração para Programadores
em PHP
desse documento você deve carregar as informações dele de forma individual e as
exibirá em uma nova view com o nome de “exibedoc”, sendo assim nessa view você
deve ser capaz de exibir as informações individuais desse documento. Lembre-se de
criar um link de retorno para a página de listagem dos documentos.

</strong>
      </div>
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
<a href="/doc">Voltar</a></div></div>
@endsection
