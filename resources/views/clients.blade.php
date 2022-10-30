@extends("layout.app")
@section("content")
    @foreach ($clients as $c)
        <x-client-card :client="$c"/>
    @endforeach
@endsection
