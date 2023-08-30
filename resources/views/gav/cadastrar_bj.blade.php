@extends('adminlte::page')

{{-- TÍTULO --}}
@section('content_header', "Cadastrar Bj e sua Fase")

{{-- CONTEÚDO --}}
@section('content')
    <form action="{{ route('gav.store_bj') }}" method="post" class="d-flex flex-column w-50">
        @csrf
        <div class="row mb-4">
            <div class="col">
                <label for="numero_bj" class="form-label">Número BJ</label>
                <input type="number" name="numero_bj" id="numero_bj" class="form-control">
            </div>
            <div class="col">
                <label for="fase_processual" class="form-label">Fase Processual</label>
                <select name="fase_processual" id="fase_processual" class="custom-select">
                    <option value="">Selecione</option>
                    @foreach ($fases as $data)
                        <option value="{{ $data->id }}">{{ $data->fase }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
@stop

{{-- RODAPÉ --}}
@include('include.main-footer')
