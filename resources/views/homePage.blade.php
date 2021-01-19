@extends ('layouts.app')

@section('content')
    {{-- <p>{{ $dresses }}</p> --}}
    <div class="cards-container">
        <div class="container">
            <div class="row">
                @foreach ($dresses as $key => $dress)
                    <div class="col-12 col-lg-4 text-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dress->marca }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $dress->tessuto }}</h6>
                            <p>Colore: {{ $dress->colore }} </p>
                            <p>Taglia: {{ $dress->taglia }} </p>
                            <p>Modello: {{ $dress->modello }} </p>
                            <p>Lunghezza: {{ $dress->lunghezza }} </p>
                            <p class="text-center">
                                Prezzo: {{ $dress->prezzo }} €
                            </p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi officiis minima earum, voluptate nam!.</p>
                            <a href="#" class="card-link text-center">Buy now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
