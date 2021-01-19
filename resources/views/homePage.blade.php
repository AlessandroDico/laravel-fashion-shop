@extends ('layouts.app')

@section('content')
    {{-- <p>{{ $dresses }}</p> --}}

    @foreach ($dresses as $key => $dress)
        <p>{{ $dress->marca }}</p>
    @endforeach
@endsection
