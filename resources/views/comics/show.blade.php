@extends('layouts.app')
@section('title', $comic->title)
@section('content')
    <section class="py-5 bg-footer text-white">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0"
                        src="{{ $comic->thumb }}" alt="{{ $comic->title }}" />
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $comic->title }}</h1>
                    <div class="fs-5 mb-5">
                        <span>$ {{ $comic->price }}</span>
                    </div>
                    <p class="lead">{{ $comic->description }}</p>
                    <p class="lead"><strong>Serie:</strong> {{ $comic->series}}</p>
                    <p class="lead"><strong>Data di vendita:</strong> {{ $comic->sale_date }}</p>
                    <p class="lead"><strong>Tipo:</strong> {{ $comic->type }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
