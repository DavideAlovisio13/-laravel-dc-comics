@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
<a href="{{route('comics.index')}}" class="btn btn-primary">Scopri i nostri fumetti</a>
</main>

@endsection
