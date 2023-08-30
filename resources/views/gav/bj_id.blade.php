@extends('adminlte::page')

{{-- PLUG-IN DATATABLE --}}
@section('plugins.Datatables', true)

{{-- TÍTULO --}}
@section('content_header', "Listagem - Bj e suas Fases")

{{-- CONTEÚDO --}}
@section('content')
    {{-- LISTAGEM --}}
    <table id="tabela" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número BJ</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $bj->id }}</td>
                <td>{{ $bj->numero_bj }}</td>
                <td>
                    <a href="#">
                        <button class="btn btn-success">
                            Incluir Informações da Fase <i class="fas fa-fw fa-paper-plane"></i>
                        </button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    {{-- BOTÕES --}}
    <div class="d-flex justify-content-center">
        <div>
            <a href="{{ route('gav.list_bj') }}">
                <button class="btn btn-warning">Voltar</button>
            </a>
        </div>
        <div class="mx-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Incluir Fase <i class="fas fa-fw fa-plus"></i>
            </button>
        </div>
    </div>

    {{-- MODAL --}}
    @include('include.modal')
@stop

{{-- RODAPÉ --}}
@include('include.main-footer')

{{-- SCRIPT DA DATATABLE --}}
@section('js')
    <script src="../js/datatable.js"></script>
@stop
