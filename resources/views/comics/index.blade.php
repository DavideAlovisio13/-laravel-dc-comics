@extends('layouts.app')

@section('title', 'Dc Comics')

@section('content')
    <main class="mt-5">
        <div class="container">
            <h1>
                Current Series
            </h1>
            <div class="row">
                @if (@session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="col-12 col-md-6 col-lg-3 d-flex w-100 flex-wrap justify-content-center">
                    @foreach ($comics as $comic)
                        <div class="card animate__animated position-relative">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}" />
                            <span class="text-white position-absolute spanpop shadow-lg"
                                style="display: none;">{{ $comic->description }}</span>
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->series }}</h5>
                                <p>
                                    Price: <a href="#">{{ $comic->price }}</a>
                                </p>
                                <p>
                                    Type: <a href="#">{{ $comic->type }}</a>
                                </p>
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary me-2 mb-2">Scopri!</a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary mt-4" id="comicEdit">Modifica</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" id="comicDelete">
                                        Elimina
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>



@endsection
