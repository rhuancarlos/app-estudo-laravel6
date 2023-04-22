@extends('admin.layouts.app')

@section('title', 'Produtos')

@section('content')
  <h1>Exibindo Produtos</h1>

  <a href=" {{ route('products.create') }}"> Cadastrar </a>
  <hr>
  @component('admin.components.card')
    @slot('title')
      Title do Card
    @endslot
    Card de exemplo
  @endcomponent

  <hr>
  @include('admin.includes.alerts', ['content' => 'conteúdo do alert aqui'])
  <hr>
  @if(!empty($titlePage))
    <h1> {!! $titlePage!!} </h1>
  @elseif(empty($titlePage))
    <h1> {{ "PÁGINA TESTE 2" }} </h1>
  @endif
  
  {!! $listProducts !!}
  
  <hr>
  @empty($varEmpty))
    <h1> {{ "PÁGINA TESTE 3" }} </h1>
  @endempty
  <hr>
  @isset($varIsset)
    <h1> {{ "PÁGINA TESTE 4" }} </h1>
  @endisset
  <hr>
  @auth
    <h1> Conectado !</h1>
  @endauth
  <hr>
  @guest
    <h1> Não conectado !</h1>
  @endguest
  <hr>
  @isset($typeSwitch)
    @switch($typeSwitch)
      @case(1)
        <h1> Switch case = 1 !</h1>
        @break

      @case(2)
        <h1> Switch case = 2 !</h1>
        @break

      @case(3)
        <h1> Switch case = 3 !</h1>
        @break

      @default
        <h1> Switch Default !</h1>
    @endswitch
  @endisset
  <hr>
  <h1>FOR: Range 20</h1>
  @for ($i = 0; $i <= 20; ++$i)
    @if($i%2 == 0)
      {{ $i }}
    @else
      <span class="r-red"> {{ $i }} </span>
      {{-- <p> {{ $i }} </p> --}}
    @endif
  @endfor
  <hr>
  <h1>FOREACH:</h1>
  @foreach($arrDados as $dados)
    <p class="@if ($loop->last) last @endif"> {{ $dados }} </p>
  @endforeach
  <hr>
  <h1>FORELSE:</h1>
  @forelse($arrProdutos as $dados)
    {{ $dados}}
  @empty
    <h1> {{ "Não existem produtos cadastrados." }} </h1>
  @endforelse

@endsection


@push('styles')
  <style>
    .last { background: #ccc;}
    .r-red { color: red;}
  </style>
@endpush

@push('scripts')
  <script>
    document.body.style.background = '#d9d9d9';
  </script>
@endpush