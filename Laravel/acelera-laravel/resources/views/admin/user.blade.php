@extends('template.single')
@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
      <h2>EX99</h2>
@foreach ($user as $item)
 <div class="text-danger">  {{$item}} </div>
@endforeach
</div>
</div></div>
@endsection
