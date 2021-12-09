@extends('template.single')
@section('content')
<div class="container mt-5">
  <div class="row">
  <div class="col-sm-8">
      <strong>99 - Usando seu conhecimento em laravel, crie uma estrutura model, view e controller na
qual você possa facilmente apresentar o nome e a idade de um usuário ao acessar a
rota “perfil”. (/perfil)
</strong>
      </div>
    <div class="col-sm-12">
      <h2>EX99</h2>
@foreach ($user as $item)
 <div class="text-danger">  {{$item}} </div>
@endforeach
</div>
</div></div>
@endsection
