@extends('adminlte::page')

{{-- PLUG-IN DATATABLE --}}
@section('plugins.Datatables', true)

{{-- TÍTULO --}}
@section('content_header', "Listagem - Bj's")

{{-- CONTEÚDO --}}
@section('content')
    <table id="tabela" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número BJ</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bjs as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->numero_bj }}</td>
                    <td>
                        <a href="{{ route('gav.show_id_bj', $data->id) }}">
                            <button class="btn btn-success">
                                <i class="fas fa-fw fa-eye"></i>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div class="d-flex justify-content-center">
        <div class="mx-3">
            <a href="{{ route('gav.form_bj') }}">
                <button class="btn btn-warning">
                    Incluir BJ <i class="fas fa-fw fa-plus"></i>
                </button>
            </a>
        </div>
        <div>
            <button class="btn btn-primary">
                Planilha GAV <i class="fas fa-fw fa-table"></i>
            </button>
        </div>
    </div>
@stop

{{-- RODAPÉ --}}
@include('include.main-footer')

{{-- SCRIPT DA DATATABLE --}}
@section('js')
    <script src="../js/datatable.js"></script>
@stop
