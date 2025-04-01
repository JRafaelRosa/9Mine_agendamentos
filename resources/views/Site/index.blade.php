@extends('layouts.main')

@section('title','Home')

@section('content')
    <section class="container">
        <div class="text-white align-items-center d-flex justify-content-center mt-5">
            <div>
                @auth
                    <h2 class="title_bem-vindo">Bem-vindo, {{ Auth::user()->nome }}</h2>
                @else
                    <h2 class="title_bem-vindo">Bem-vindo, visitante!</h2>
                @endauth

                <!-- A linha sempre aparece -->
                <div class="line-container">
                    <div class="animated-line"></div>
                </div>

                @auth
                    @else
                        <div class="d-flex justify-content-center mt-3">
                            <a href="{{ route('site.login') }}">
                                <button class="btn-login__index btn bg-warning text-black" type="button" name="Login" value="Entrar">
                                    Entrar
                                </button>
                            </a>
                        </div>
                    @endauth
            </div>
        </div>
    </section>
@endsection
