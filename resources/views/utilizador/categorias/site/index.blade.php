@extends('layouts.app')
@section('conteudo')
    <div class="card shadow-lg p-3 mb-2 bg-white rounded">
        <div class="card-body">
            <h3 class="text-dark">{{$titulo}}</h3>
        </div>
    </div>

    <div class="shadow-lg p-3 mb-5 bg-white rounded cards-list">

        @foreach ($categorias as $item)

            <div class="card{{ $n++ }} card ">
                <div class="card_image"></div>
                <div class="card_title title-white">
                    <p>{{ $item->vc_nome }}</p>
                </div>
            </div>
            @if ($n == 6)
                <?php $n = 1; ?>
            @endif
        @endforeach


    </div>
    <!-- End of shadow -->

@endsection
