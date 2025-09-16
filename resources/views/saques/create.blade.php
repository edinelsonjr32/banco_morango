{{-- resources/views/saques/create.blade.php --}}
@extends('layout')

@section('title', 'Saque')

@section('actions')
  {{-- Ações opcionais no topo --}}
@endsection

@section('alerts')
  {{-- Inserir depois: @if($errors->any()) ... @endif --}}
@endsection

@section('page')
  {{-- Trocar action="#" por route('saque.store') e inserir @csrf depois --}}
  <form method="POST" action="#" class="mt-3">
    {{-- @csrf (inserir depois) --}}

    <div class="row">
      <div class="col-md-4 mb-3">
        <label class="form-label">Valor (R$)</label>
        <input type="number" step="0.01" min="0.01" name="valor" class="form-control" placeholder="0,00">
        <div class="form-text">Informe o valor do saque.</div>
      </div>
      <div class="col-md-8 mb-3">
        <label class="form-label">Descrição (opcional)</label>
        <input type="text" name="descricao" class="form-control" placeholder="Ex.: saque no caixa...">
      </div>
    </div>

    <div class="d-flex gap-2">
      <button class="btn btn-danger" type="submit">Sacar</button>
      {{-- Trocar href por route('painel') depois --}}
      <a href="#" class="btn btn-link">Cancelar</a>
    </div>
  </form>
@endsection
