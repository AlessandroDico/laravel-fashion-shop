@extends ('layouts.app')

@section('content')
    {{-- <p>{{ $dresses }}</p> --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach ($dresses as $key => $dress)
                    <p>{{ $dress->marca }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
