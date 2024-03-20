<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{ asset('css/list/list_mobile.css') }}">
    <title>Registro Gestión de Acceso y Registro de Visitantes</title>
</head>

<body>
    <main>
        <div class="profile">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <a class="profile__link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img class="profile__image" src="{{ asset('images/icon_exit.jpg') }}" alt="">
                </a>
            </form>
            <p class="profile__welcome">Bienvenido {{ ucfirst(Auth::user()->name) }}</p>
        </div>
        <div class="button_container_head">
            <a class="button_container_head__link" href="{{ route('registro') }}"><button class="button   button_container_head__register">REGISTRO</button></a>
            <a class="button_container_head__link" href="{{ route('lista') }}"><button class="button button_container_head__list">LISTA DE VISITANTES</button></a>
        </div>

        <h2 class="title">
            LISTA DE VISITANTES
        </h2>

        <div class="container_list">
            @foreach ($visitantes as $visitante)
            <div class="container_list__card">
                <section class="container_list__section">
                    <p class="container_list__name">{{ $visitante->name }} {{ $visitante->lastname }}</p>
                </section>
                <section class="container_list__section">
                    <div class="container_list__block">
                        <img class="profile__image profile__image--large" src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="">
                    </div>
                    <div class="container_list__block">
                        <p class="container_list__text container_list__text--bold">Filial:</p>
                        <p class="container_list__text">{{ $visitante->subsidiary }}</p>
                    </div>
                    <div class="container_list__block">
                        <p class="container_list__text container_list__text--bold">Gerencia:</p>
                        <p class="container_list__text">{{ $visitante->management }}</p>
                    </div>
                </section>
                <section class="container_list__section container_list__section--right">
                    <p class="container_list__text">{{ $visitante->created_at->format('d/m/Y') }}</p>
                </section>
            </div>
            @endforeach
            <div class="container_list__paginate">
                {{ $visitantes->links() }}
            </div>
        </div>
    </main>
</body>

</html>