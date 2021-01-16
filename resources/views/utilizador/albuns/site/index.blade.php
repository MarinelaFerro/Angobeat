@extends('layouts.app')
@section('conteudo')
    <div class="card shadow-lg p-3 mb-2 bg-white rounded">
        <div class="card-body">
            <h3 class="text-dark">{{ $titulo }}</h3>
        </div>
    </div>
    <div class="shadow-lg p-5 mb-5 bg-white rounded container-wrapper">
        @foreach ($albuns as $album)
            <div class="box-album col-md-3">
                <img src="{{ $album->vc_imagem }}" class="img-album">
                <div class="overlay-btn">
                    <a href="">
                        <ion-icon name="heart-outline"></ion-icon>
                    </a>
                </div>
                <div class="btn-play">
                    <a href="">
                        <ion-icon name="caret-forward-outline"></ion-icon>
                    </a>
                </div>
                <div class="info-album">
                    <h6><a href="">{{ $album->vc_nome }}</a></h6>
                    <span>por Marinela Ferro</span>
                </div>

            </div>
        @endforeach

    </div>



@endsection
