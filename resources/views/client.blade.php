@extends("layout.app")
@section("content")
    <x-client-card :client="$client"/>

    Facture: <br>
    @foreach ($factures as $f)
        <x-facture-card :facture="$f"/>
    @endforeach
@endsection
