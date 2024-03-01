<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/register/register_mobile.css')}}">
    <title>Registro Gestión de Acceso y Registro de Visitantes</title>
</head>

<body>
    <main>
        <div class="profile">
            <img class="profile__image" src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2022/11/terminator-1984-2880437.jpg?tf=3840x" alt="">
            <p class="profile__welcome">Bienvenido (nombre de administrador)</p>
        </div>
        <div class="button_container_head">
            <button class="button   button_container_head__register">Registro</button>
            <button class="button button_container_head__list">Lista de visitantes</button>
        </div>

        <h2 class="title">
            Registro
        </h2>

        <form class="form_register" action="">

            <div class="form_register__container">
                <label class="form_register__label" for="">Cedula</label>
                <input class="form_register__input" type="number" name="" id="">
            </div>

            <div class="form_register__container">
                <label class="form_register__label" for="">Nombre(s)</label>
                <input class="form_register__input" type="text" name="" id="">
            </div>


            <div class="form_register__container">
                <label class="form_register__label" for="">Apellido(s)</label>
                <input class="form_register__input" type="text" name="" id="">
            </div>

            <div class="form_register__container">
                <label class="form_register__label" for="">Razón de visita</label>
                <textarea class="form_register__input form_register__input--textarea" name="" id="" cols="30" rows="10"></textarea>
            </div>

            <p>Filial y Gerencia</p>
            <div class="form_register__container form_register__container--affiliate">
                <div class="form_register__container">
                    <label class="form_register__label" for="">Filial</label>
                    <select class="form_register__input" name="" id="">
                        <option>a</option>
                        <option>b</option>
                        <option>c</option>
                        <option>d</option>
                    </select>
                </div>

                <div class="form_register__container">
                    <label class="form_register__label" for="">Gerencia</label>
                    <select class="form_register__input" name="" id="">
                        <option>D</option>
                        <option>C</option>
                        <option>B</option>
                        <option>A</option>
                    </select>
                </div>
            </div>

            <div class="form_register__container">
                <label class="form_register__label" for="">Foto</label>
                <div>
                    <img src="" alt="">
                </div>
            </div>
        </form>

    </main>
</body>

</html>