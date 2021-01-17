@extends('layouts.app')
@section('conteudo')
    <div class="card shadow-lg p-3 mb-2 bg-white rounded">
        <div class="card-body">
            <h3 class="text-dark">{{ $titulo }}</h3>
        </div>
    </div>
    <div class="shadow-lg p-3 mb-5 bg-white rounded content-wrapper">

        @foreach ($artistas as $artista)
            <!---fim item 5-->
            <div class="box">
                <div class="btn-overlay">
                    <div class="play">
                        <a href="#">
                            <ion-icon name="caret-forward-outline" class="icon-area"></ion-icon>
                        </a>
                    </div>

                    <div class="play">
                        <ion-icon name="heart-outline" class="icon-area"></ion-icon>
                    </div>
                </div>

                <div class="img-box">
                    <img src="/{{$artista->vc_imagem}}" class="img-area">
                </div>
                <div class="info-box">
                    <h6><a href="#">{{$artista->vc_nome}}</a></h6>
                    <span>123.999 seguidores</span>
                </div>
            </div>
        @endforeach
    </div>

@endsection
