@extends("layout.app")
@section("content")
    @foreach($factures as $f)
        <x-facture-card :facture="$f"/>
    @endforeach
@endsection
