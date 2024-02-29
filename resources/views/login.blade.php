<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Gestión de Acceso y Registro de Visitantes</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/login_mobile.css') }}">
    <link rel="stylesheet" media="screen and (min-width: 426px)" href="{{ asset('css/login/login_tablet.css') }}">
    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="{{ asset('css/login/login_desktop.css') }}">


</head>

<body>
    <header>
        <h1 class="login__title">Gestión de Acceso y Registro de Visitantes</h1>
    </header>

    <section class="login">
        <form class="login-form" action="" method="post">

            <div class="login-form__container">
                <label class="login-form__label login-form__label--user" for="user_input_login">Usuario</label>
                <input class="login-form__input login-form__input--user" type="text" name="user" id="user_input_login">
            </div>

            <div class="login-form__container">
                <label class="login-form__label login-form__label--password" for="password_input_login">Contraseña</label>
                <input class="login-form__input login-form__input--password" type="password" name="password" id="password_input_login">
            </div>

            <button class="login-form__button" type="submit" name="submit_button">Iniciar sesión</button>

        </form>
    </section>

</body>

</html>