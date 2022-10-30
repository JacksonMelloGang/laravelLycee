@extends("layout.app")
@section("content")
    @foreach ($produits as $p)
        <x-produit-card :produit="$p"/>
    @endforeach
@endsection
