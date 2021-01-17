@extends('layouts.app')
@section('conteudo')
    <div class="card shadow-lg p-3 mb-2 bg-white rounded">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-dark">{{ $titulo }}</h3>
                </div>
                <div class="col-md-6 text-right">
                    <h3 class="text-dark"><a href="{{ route('musica.listar') }}"><i class="fas fa-list"></i> Lista de
                            Musicas</a></h3>
                </div>
            </div>

        </div>
    </div>

    <div class=" shadow-lg p-3 mb-5 bg-white rounded container-form">
        <form form action="{{ route('musica.cadastrar.enviar') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('forms._musicas.index')
            <div class="col-md-12 text-center">

                <button type="submit" class="btn btn-primary col-md-3 form-control">Continuar</button>
            </div>
        </form>

    </div>


@endsection
