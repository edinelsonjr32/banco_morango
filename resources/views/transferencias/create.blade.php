{{-- resources/views/transferencias/create.blade.php --}}
@extends('layout')

@section('title', 'Transferência')

@section('actions')
  {{-- Ações opcionais no topo --}}
@endsection

@section('alerts')
  {{-- Inserir depois: @if($errors->any()) ... @endif --}}
@endsection

@section('page')
  {{-- Trocar action="#" por route('transferencia.store') e inserir @csrf depois --}}
  <form method="POST" action="#" class="mt-3">
    {{-- @csrf (inserir depois) --}}

    <div class="row">
      <div class="col-md-3 mb-3">
        <label class="form-label">Agência destino</label>
        <input type="text" name="agencia_destino" class="form-control" placeholder="0001">
        <div class="form-text">Informe a agência do destinatário.</div>
      </div>
      <div class="col-md-5 mb-3">
        <label class="form-label">Conta destino</label>
        <input type="text" name="conta_destino" class="form-control" placeholder="123456-7">
        <div class="form-text">Informe o número da conta destino.</div>
      </div>
      <div class="col-md-4 mb-3">
        <label class="form-label">Valor (R$)</label>
        <input type="number" step="0.01" min="0.01" name="valor" class="form-control" placeholder="0,00">
        <div class="form-text">Informe o valor da transferência.</div>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Descrição (opcional)</label>
      <input type="text" name="descricao" class="form-control" placeholder="Ex.: Aluguel, mensalidade...">
    </div>

    <div class="d-flex gap-2">
      <button class="btn btn-primary" type="submit">Transferir</button>
      {{-- Trocar href por route('painel') depois --}}
      <a href="#" class="btn btn-link">Cancelar</a>
    </div>
  </form>
@endsection
