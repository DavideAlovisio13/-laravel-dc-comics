@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="container">
            <h1 class="text-center text-uppercase">Dc Comics</h1>
            <section id="home">
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
            <section id="scopri">
            </section>
        <section id="inserisci"></section>
        </div>
    </main>

@endsection


