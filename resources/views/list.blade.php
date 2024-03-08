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
            <img class="profile__image" src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="">
            <p class="profile__welcome">Bienvenido (nombre de administrador)</p>
        </div>
        <div class="button_container_head">
            <button class="button   button_container_head__register"><a class="button_container_head__link" href="">REGISTRO</a></button>
            <button class="button button_container_head__list"><a class="button_container_head__link" href="">LISTA DE VISITANTES</a></button>
        </div>

        <h2 class="title">
            LISTA DE VISITANTES
        </h2>

        <div class="container_list">
            <div class="container_list__card">
                <section class="container_list__section">
                    <p class="container_list__name">Maria Ortoncia</p>
                </section>
                <section class="container_list__section">
                    <div class="container_list__block">
                        <img class="profile__image profile__image--large" src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="">
                    </div>
                    <div class="container_list__block">
                        <p class="container_list__text container_list__text--bold">Filial:</p>
                        <p class="container_list__text">vencemos</p>
                    </div>
                    <div class="container_list__block">
                        <p class="container_list__text container_list__text--bold">Gerencia:</p>
                        <p class="container_list__text">OTIC</p>
                    </div>
                </section>
                <section class="container_list__section container_list__section--right">
                    <p class="container_list__text">16/2/24</p>
                </section>
            </div>
            <div class="container_list__card">
                <section class="container_list__section">
                    <p class="container_list__name">Maria Ortoncia</p>
                </section>
                <section class="container_list__section">
                    <div class="container_list__block">
                        <img class="profile__image profile__image--large" src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="">
                    </div>
                    <div class="container_list__block">
                        <p class="container_list__text container_list__text--bold">Filial:</p>
                        <p class="container_list__text">vencemos</p>
                    </div>
                    <div class="container_list__block">
                        <p class="container_list__text container_list__text--bold">Gerencia:</p>
                        <p class="container_list__text">OTIC</p>
                    </div>
                </section>
                <section class="container_list__section container_list__section--right">
                    <p class="container_list__text">16/2/24</p>
                </section>
            </div>
        </div>
    </main>
</body>

</html>