@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
<a href="{{route('comics.index')}}" class="btn btn-primary">Scopri!</a>
</main>

@endsection
