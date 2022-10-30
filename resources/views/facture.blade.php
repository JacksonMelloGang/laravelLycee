@extends("layout.app")
@section("content")
    @foreach ($facture as $f)
        <x-facture-card :facture="$f"/>
    @endforeach
@endsection
