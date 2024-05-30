@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="container">
            <h1 class="text-center text-uppercase">Dc Comics</h1>
            <section id="home" class="py-4">
                <div class="container px-5 ">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="p-5"><img class="img-fluid rounded-circle" src="/images/home.jpg" alt="..." />
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-5 text-white">
                                <h2 class="display-4 fw-bolder pb-2">Benvenuto in DC Comics</h2>
                                <p class="fs-4">
                                    Sei pronto a immergerti in un vortice di avventure, risate e assurdità? Bene, allaccia
                                    la tua cintura anti-gravità e preparati a navigare tra le pagine digitali più bizzarre
                                    che il multiverso abbia mai visto.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="scopri" class="py-4">
                <div class="container px-lg-5">
                    <h2 class="display-4 fw-bolder pb-2 text-center pb-4 text-white">Scopri DC</h2>
                    <div class="row gx-lg-5">
                        <div class="col-12 col-md-6 col-lg-3 d-flex w-100 flex-wrap justify-content-center">
                            @foreach ($comics as $comic)
                                <div class="card bg-light border-0 ">
                                    <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}" /></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section id="inserisci"></section>
        </div>
    </main>

@endsection
