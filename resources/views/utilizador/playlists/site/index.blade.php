@extends('layouts.app')
@section('conteudo')
    <div class="card shadow-lg p-3 mb-2 bg-white rounded">
        <div class="card-body">
            <h3 class="text-dark">{{ $titulo }}</h3>
        </div>
    </div>
    <!---playlist-->
    <div class="shadow-lg p-3 mb-5 bg-white rounded content-wrapper">
        <div class="box add-playlist col-md-3">
            <h6>Criar playlist</h6>
            <div class="add">
                <a href="" data-toggle="modal" data-target="#cadastroPlaylist">
                    <ion-icon name="add-outline"></ion-icon>
                </a>

            </div>
        </div>
        @foreach ($playlists as $playlist)
            <div class="box">
                <div class="btn-play">
                    <a href="{{ $playlist->id }}">
                        <ion-icon name="caret-forward-outline"></ion-icon>
                    </a>
                </div>
                <img src="{{ $playlist->vc_imagem }}" alt="">
            </div>
        @endforeach



    </div>
@endsection
@section('css')

    <link rel="stylesheet" href="css/playlist.css">
@endsection
