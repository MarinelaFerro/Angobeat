@extends('layouts.app')
@section('conteudo')
    <div class="card shadow-lg p-3 mb-2 bg-white rounded">
        <div class="card-body">
            <h3 class="text-dark">{{ $titulo }}</h3>
        </div>
    </div>
    <div class=" shadow-lg p-5 mb-5 bg-white rounded  container-wrapper">
        @foreach ($musicas as $musica)
            <div class="box-music">
                <img src="{{ $musica->vc_imagem }}" alt="">
                <div class="btn-overlay">
                    <div class="icon">
                        <a href="">
                            <ion-icon name="heart-outline"></ion-icon>
                        </a>
                    </div>
                    <div class="icon">
                        <a href="http://">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h5><a href="">por Marinela ft(Jessica)</a></h5>
                    <span>{{ $musica->vc_titulo }}</span>
                </div>
                <div class="btn-play">
                    <a href="">
                        <ion-icon name="caret-forward-outline"></ion-icon>
                    </a>

                </div>
            </div>
        @endforeach
    </div>

@endsection
