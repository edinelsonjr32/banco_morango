{{-- resources/views/pagamentos/create.blade.php --}}
@extends('layout')

@section('title', 'Pagamento de Conta')

@section('actions')
  {{-- Ações opcionais no topo --}}
@endsection

@section('alerts')
  {{-- Inserir depois: @if($errors->any()) ... @endif --}}
@endsection

@section('page')
  {{-- Trocar action="#" por route('pagamento.store') e inserir @csrf depois --}}
  <form method="POST" action="#" class="mt-3">
    {{-- @csrf (inserir depois) --}}

    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label">Referência (linha digitável)</label>
        <input type="text" name="referencia" class="form-control"
               placeholder="00000.00000 00000.000000 00000.000000 0 00000000000000">
        <div class="form-text">Informe a linha digitável do boleto/fatura.</div>
      </div>
      <div class="col-md-3 mb-3">
        <label class="form-label">Vencimento</label>
        <input type="date" name="vencimento" class="form-control">
        <div class="form-text">Opcional: data de vencimento.</div>
      </div>
      <div class="col-md-3 mb-3">
        <label class="form-label">Valor (R$)</label>
        <input type="number" step="0.01" min="0.01" name="valor" class="form-control" placeholder="0,00">
        <div class="form-text">Informe o valor do pagamento.</div>
      </div>
    </div>

    <div class="d-flex gap-2">
      <button class="btn btn-warning" type="submit">Pagar</button>
      {{-- Trocar href por route('painel') depois --}}
      <a href="#" class="btn btn-link">Cancelar</a>
    </div>
  </form>
@endsection
