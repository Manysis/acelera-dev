@extends('template.single')
@section('content')
<div class="container mt-5">
  <div class="row">
      
<div class="col-sm-12">
      <p class="upcase">EX 103 - Usando seus conhecimentos de Laravel, crie agora uma estrutura de model para
uma classe chamada “Assinatura”. Crie também a sua respectiva controller. Em seguida
crie um migration para essa classe assinatura, esse migration deve ser capaz de ter as
seguintes informações no banco:
- Qnt de caracteres da assinatura
- Assinatura padrão
- Nº vezes que essa assinatura foi usada
Após rodar o migrate criado por você, insira manualmente no banco (PHPmyadmin) as
informações de 3 Assinaturas, implemente uma view capaz de fazer as listagem de todas
as assinaturas do banco e também um link para uma rota que permita visualizar as
informações individuais de cada assinatura. Lembre-se de criar links de volta para a
página de listagem após ser redirecionado para a rota de exibição dos detalhes
individuais da assinatura.
</strong>
      </div>
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
