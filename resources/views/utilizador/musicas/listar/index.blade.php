@extends('layouts.app')
@section('conteudo')
    <div class="card shadow-lg p-3 mb-2 bg-white rounded">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-dark">{{ $titulo }}</h3>
                </div>
                <div class="col-md-6 text-right">
                    <h3 class="text-dark"><a href="{{route('musica.cadastrar')}}"><i class="fas fa-plus"></i> Cadastrar Musica</a></h3>
                </div>
            </div>

        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>Titulo</th>
                            <th>Data_pub</th>
                            <th>Descrição</th>
                            <th>Duração</th>
                            <th>Artista</th>
                            <th>Album</th>
                            <th>Categoria</th>
                            <th>Imagem</th>
                            <th>Visualizações</th>
                            <th>Comentários</th>
                            <th>Audio</th>
                            <th>Editar</th>
                            <th>Eliminar</th>

                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($musicas as $musica)


                            <tr>
                                <td>{{ $musica->vc_titulo }}</td>
                                <td>lorem</td>
                                <td>Amor</td>
                                <td>0:56:89</td>
                                <td>Marinela Ferro</td>
                                <td>Deus é amor</td>
                                <td>R&B</td>
                                <td>Foto</td>
                                <td>125.989</td>
                                <td>30</td>
                                <td><i class="fas fa-play-circle"></i></td>
                                <td>
                                    <a href="{{url('/musicas/editar/'.$musica->id)}}"><ion-icon name="create-outline"></ion-icon></a>
                                </td>
                                <td>
                                    <a href="{{url('/musicas/apagar/'.$musica->id)}}"><ion-icon name="trash-outline"></ion-icon></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
