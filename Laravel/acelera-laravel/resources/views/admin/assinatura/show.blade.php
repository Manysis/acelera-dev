@extends('template.single')
@section('content')
<div class="container mt-5">
  <div class="row">
      
    <div class="col-sm-12">
        <div class="row">
<div class="col">
 <div class="text-danger"> Qnt de caracteres da assinatura: {{$assinatura->qtd_caracteres}} </div>
 <div class="text-danger"> Assinatura padrão: {{$assinatura->assim_padrao}} </div>
 <div class="text-danger"> Nº vezes que essa assinatura foi usada: {{$assinatura->num_assin_used}} </div>
 <br>
</div>
        </div>
</div>
<a href="/doc">Voltar</a></div></div>
@endsection
