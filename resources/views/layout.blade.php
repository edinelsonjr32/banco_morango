{{-- resources/views/layout.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container py-4">

  {{-- ALERTAS GERAIS (INSERIR DEPOIS: session status, validação, etc.) --}}
  {{-- Ex.: @if(session('status')) ... @endif --}}
  @yield('alerts')

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">@yield('title', 'Título da Página')</h4>
    <div class="btn-group">
      {{-- Ações/botões do topo (INSERIR DEPOIS: rotas com route()) --}}
      @yield('actions')
    </div>
  </div>

  {{-- CONTEÚDO ESPECÍFICO DA PÁGINA --}}
  @yield('page')

</div>
@endsection
