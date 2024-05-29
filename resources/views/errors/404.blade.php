@extends('errors::personal')

@section('title', __('Not Found'))

@section('content')
    <style lang="scss">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        main {
            background-image: url("/images/404.jpg");
            background-size: cover;
            height: 100vh;
            width: 100% position: relative;

            .center {
                position: absolute;
                top: 50%;
                left: 30%;
                transform: translate(-80%, -50%);
                text-align: center;
                background-blend-mode: difference;

                h1 {
                    font-size: 10rem;
                    color: #2B2B2B;
                }

                h2 {
                    font-size: 3rem;
                    color: #2B2B2B;
                }

                .btn-cust {
                    width: 100px;
                    height: 100px;
                    border-radius: 50%;
                    background-image: url("/images/404-det.jpg");
                    background-size: cover;
                    background-repeat: no-repeat;
                    border: none;
                    margin-top: 20px;
                    cursor: pointer;
                    box-shadow: 0px 10px 15px 0px #325B3D;

                    &:hover {
                        transform: scale(1.2);
                    }

                    a {
                        text-decoration: none;
                        color: #2B2B2B;
                        font-size: 1.5rem;
                    }
            }
        }
    </style>
    <main id="404page">
        <div class="center">
            <h1>404</h1>
            <h2>Ehmm... </h2>
            <button class="btn-cust">
                <a href="{{ route('home') }}">Home</a>
            </button>
        </div>
    </main>
@endsection
