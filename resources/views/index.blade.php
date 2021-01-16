@extends('layouts.app')
@section('conteudo')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="main-panel">
            <div class="content-wrapper">
                {{-- <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card corona-gradient-card">
                            <div class="card-body py-0 px-0 px-sm-3">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3 col-xl-2 card-img">
                                        <img src="/img/imagens/Group126@2x.png" class="gradient-corona-img img-fluid"
                                            alt="">
                                    </div>
                                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                                        <h4 class="mb-1 mb-sm-0">Estás preparado para o futuro?</h4>
                                        <p class="mb-0 font-weight-normal d-none d-sm-block">A música mais
                                            proxima de si</p>
                                    </div>
                                    <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                                        <span>
                                            <a href="formaddmusic.html" target="_blank"
                                                class="btn btn-outline-light btn-rounded get-started-btn add-music"
                                                style="background: #fff; color: palevioletred; font-weight: bold;">Adicionar
                                                música</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-gray-800 mt-3">O que temos para você hoje
                    </h3>
                </div>

                <!----slide show-->
                <div class="page-wrapper justify-content-between mt-2">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded post-slider">
                        <ion-icon name="chevron-back-outline" class="prev icon"></ion-icon>
                        <ion-icon name="chevron-forward-outline" class="next icon"></ion-icon>
                        <div class="post-wrapper">
                            @foreach ($musicas as $musica)
                                <div class="post">
                                    <img src="/{{ $musica->vc_imagem }}" alt="{{ $musica->vc_titulo }}" class="img-music">
                                    <div class="btn-play">
                                        <a href="{{ route('/') }}">
                                            <ion-icon name="caret-forward-outline"></ion-icon>
                                        </a>
                                    </div>
                                    <div class="music-overlay">
                                        <div class="controlls-music">
                                            <a href="{{ route('/') }}">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="controlls-music">
                                            <a href="{{ route('/') }}">
                                                <ion-icon name="chatbox-outline"></ion-icon>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="inf">
                                        <a href="#">{{ $musica->vc_titulo }}</a>
                                        <p>por Marinela ferro</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <!---area da categoria -->



                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-gray-800 mb-3">Categorias</h3>
                </div>
                <div class="categoria-wrapper">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded categoria-slider">
                        <ion-icon name="chevron-back-outline" class="cat-prev icon"></ion-icon>
                        <ion-icon name="chevron-forward-outline" class="cat-next icon"></ion-icon>
                        <div class="cate-slide">

                            @foreach ($categorias as $categoria)

                                <div class="slide-cate card{{ $n++ }}">
                                    <a href="">
                                        <h3>{{ $categoria->vc_nome }}</h3>
                                    </a>
                                </div>

                            @endforeach

                            <div class="slide-cate card6">
                                <a href="">
                                    <h3>Todas</h3>
                                </a>
                            </div>


                        </div>
                    </div>

                </div>
                <!---fim categoria-->



                <!--- albuns-->
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-gray-800 mb-3">Nossos Álbuns</h3>
                </div>
                <!--inicio slide album-->
                <div class="content-album">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded post-slider-album">
                        <ion-icon name="chevron-back-outline" class=" ant icon"></ion-icon>
                        <ion-icon name="chevron-forward-outline" class="prox icon"></ion-icon>
                        <div class="box-slider">


                            @foreach ($albuns as $album)
                                <div class="box-item ">
                                    <div class="overlay-alb">
                                        <a href="">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </a>

                                    </div>
                                    <img src="/{{ $album->vc_imagem }}" class="img-alb">
                                    <div class="btn-play">
                                        <a href="http://">
                                            <ion-icon name="caret-forward-outline"></ion-icon>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h6><a href="http://">{{ $album->vc_nome }}</a></h6>
                                        <span>por Preto show</span>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>

                </div>
                <!--fim slide album-->


                <!---artistas-->
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-gray-800 mb-3">Seus artistas favoritos</h3>
                </div>
                <div class="wrapper-artista">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded slider-artist">
                        <ion-icon name="chevron-back-outline" class=" previous icon"></ion-icon>
                        <ion-icon name="chevron-forward-outline" class=" nexting icon"></ion-icon>
                        <div class="artist-post">

                            <!---slide 5-->
                            <div class="box">
                                <div class="img-slide">
                                    <img src="/img/imagens/corp3.jpg" class="img-artist">
                                    <div class="overlay">
                                        <div class="artist-overlay">
                                            <a href="">
                                                <ion-icon name="caret-forward-outline"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="artist-overlay">
                                            <a href="">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h6><a href="">Nome do artista</a></h6>
                                        <span>12.000 seguidores</span>
                                    </div>

                                </div>
                            </div>
                            <!---fim slide 5-->


                        </div>
                    </div>
                </div>

                <!--fim artistas-->

                <!---musicas em alta-->
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-gray-800 mb-3">Músicas em alta</h3>
                </div>

                <div class="content-alt">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded  post-slide">
                        <ion-icon name="chevron-back-outline" class="preve icon"></ion-icon>
                        <ion-icon name="chevron-forward-outline" class="nexte icon"></ion-icon>
                        <div class="post-alt">
                            @foreach ($musicas as $musica)
                                <!---slide 5-->
                                <div class="item-sliderAlt">
                                    <img src="{{ $musica->vc_imagem }}" class="img-alta">
                                    <div class="overlay-alta">
                                        <div class="alt-overlay">
                                            <a href="">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="alt-overlay">
                                            <a href="">
                                                <ion-icon name="add-outline"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="alt-overlay">
                                            <a href="">
                                                <ion-icon name="chatbox-outline"></ion-icon>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="btn">
                                        <a href="#">
                                            <ion-icon name="caret-forward-outline"></ion-icon>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h6><a href="">{{ $musica->vc_titulo }}</a></h6>
                                        <span>por Marinela Ferro</span>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>

                </div>
                <!---fim em alta-->

                <!---playlists-->
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-gray-800 mb-3">Playlist compartilhadas</h3>
                </div>
                <div class="playlist-page">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded post-playlist">
                        <ion-icon name="chevron-back-outline" class="ant icon"></ion-icon>
                        <ion-icon name="chevron-forward-outline" class="pro icon"></ion-icon>
                        <div class="playlist-wrapper">

                            @foreach ($playlists as $playlist)
                                <!---slide 5-->
                                <div class="playlist">
                                    <div class="overlay-play">
                                        <div class="btn-ply-list">
                                            <a href="">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="btn-ply-list">
                                            <a href="">
                                                <ion-icon name="share-social-outline"></ion-icon>
                                            </a>
                                        </div>

                                    </div>
                                    <img src="{{ $playlist->vc_imagem }}" class="img-alb">
                                    <div class="btn-play">
                                        <a href="http://">
                                            <ion-icon name="caret-forward-outline"></ion-icon>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h6><a href="#" {{ $playlist->vc_nome }}</a></h6>
                                        <span>por Preto show</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!---fim de playlist-->









            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


    @endsection
