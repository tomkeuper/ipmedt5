@extends('default')

@section('title')
    {{"All Sushi"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($huis as $huizen)
        @include('huis.components.huisCard--index')
    @endforeach
</ul>
@endsection