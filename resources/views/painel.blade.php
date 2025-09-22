{{-- resources/views/painel.blade.php --}}
@extends('layout')

@section('title', 'Minha Conta')

@section('actions')
{{-- Trocar href="#" por route('...') depois --}}
<a href="{{route('conta.create')}}" class="btn btn-primary btn-sm">Criar Conta</a>
<a href="{{route('despositos.create')}}" class="btn btn-success btn-sm">Depositar</a>
<a href="{{route('transferencia.create')}}" class="btn btn-primary btn-sm">Transferir</a>
<a href="{{route('pagamentos.create')}}" class="btn btn-warning btn-sm">Pagar Conta</a>
<a href="{{route('saques.create')}}" class="btn btn-danger btn-sm">Sacar</a>
@endsection

@section('alerts')
{{-- Inserir depois: bloco de alerta de sessão/validação --}}
{{-- Ex.: @if(session('status')) <div class="alert alert-success">...</div> @endif --}}
@endsection

@section('page')
{{-- CARTÃO: INFORMAÇÕES DA CONTA (trocar por dados reais depois) --}}
<div class="card mb-3">
    <div class="card-body">
        <p class="mb-1"><strong>Agência/Conta:</strong> 0001-123456-7</p>
        <p class="mb-0"><strong>Saldo:</strong> R$ 0,00</p>
    </div>
</div>

{{-- TABELA: EXTRATO (substituir linhas estáticas por loop Blade depois) --}}
<div class="card">
    <div class="card-header">Extrato</div>
    <div class="card-body p-0">
        <table class="table mb-0">
            <thead class="table-light">
                <tr>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Contraparte</th>
                    <th class="text-end">Valor</th>
                </tr>
            </thead>
            <tbody>
                {{-- Exemplo estático; depois usar @forelse ... @empty ... @endforelse --}}
                <tr>
                    <td>01/01/2025 10:00</td>
                    <td>Depósito</td>
                    <td>Depósito em conta</td>
                    <td>—</td>
                    <td class="text-end text-success">+ R$ 100,00</td>
                </tr>
                <tr>
                    <td>01/01/2025 12:30</td>
                    <td>Transferência enviada</td>
                    <td>Aluguel</td>
                    <td>0001-765432-1</td>
                    <td class="text-end text-danger">- R$ 80,00</td>
                </tr>
                {{-- Quando não houver movimentos:
                <tr>
                    <td colspan="5" class="text-center p-4">Sem movimentações.</td>
                </tr>
                --}}
            </tbody>
        </table>
    </div>

    {{-- Paginação (inserir depois: {{ $transacoes->links() }}) --}}
    <div class="card-footer text-muted">
        <nav class="d-flex justify-content-end">
            <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><span class="page-link">Anterior</span></li>
                <li class="page-item active"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection