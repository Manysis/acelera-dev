@extends('template.single')
@section('content')
<div class="container mt-5">
  <div class="row">
      <h1 class="text-white bg-primary">Assinaturas</h1>
      <hr>
    <div class="col-sm-12">
        <div class="row">
@foreach ($assinaturas as $item)
<div class="col">
  <a href="/assinatura/show/{{$item->id}}"> Detalhes desta Assinatura</a>
 <div class="text-danger"> Qnt de caracteres da assinatura: {{$item->qtd_caracteres}} </div>
 <div class="text-danger"> Assinatura padrão: {{$item->assim_padrao}} </div>
 <div class="text-danger"> Nº vezes que essa assinatura foi usada: {{$item->num_assin_used}} </div>
 <br>
</div>
@endforeach
        </div>
</div></div></div>
@endsection
