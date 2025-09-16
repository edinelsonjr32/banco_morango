{{-- resources/views/depositos/create.blade.php --}}
@extends('layout')

@section('title', 'Depósito')

@section('actions')
  {{-- Ações opcionais no topo --}}
@endsection

@section('alerts')
  {{-- Inserir depois: blocos de erro/validação --}}
  {{-- Ex.: @if($errors->any()) ... @endif --}}
@endsection

@section('page')
  {{-- Trocar action="#" por route('deposito.store') e inserir @csrf depois --}}
  <form method="POST" action="#" class="mt-3">
    {{-- @csrf (inserir depois) --}}

    <div class="mb-3">
      <label class="form-label">Valor (R$)</label>
      {{-- Inserir depois: value="{{ old('valor') }}" e @error('valor') --}}
      <input type="number" step="0.01" min="0.01" name="valor" class="form-control" placeholder="0,00">
      <div class="form-text">Informe o valor do depósito.</div>
    </div>

    <div class="d-flex gap-2">
      <button class="btn btn-success" type="submit">Depositar</button>
      {{-- Trocar href por route('painel') depois --}}
      <a href="#" class="btn btn-link">Cancelar</a>
    </div>
  </form>
@endsection
