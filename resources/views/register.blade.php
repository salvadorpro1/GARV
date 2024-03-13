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
            <a class="profile__link" href="#">
                <img class="profile__image" src="{{ asset('images/icon_exit.jpg') }}" alt="">
            </a>
            <p class="profile__welcome">Bienvenido {{ ucfirst(Auth::user()->name) }}</p>
        </div>

        <div class="button_container_head">
            <a class="button_container_head__link" href=""><button class="button   button_container_head__register">REGISTRO</button></a>
            <a class="button_container_head__link" href=""><button class="button button_container_head__list">LISTA DE VISITANTES</button></a>
        </div>

        <h2 class="title">
            REGISTRO
        </h2>

        <form class="form_register" action="">

            <div class="form_register__container">
                <label class="form_register__label" for="">Cedula</label>
                <input class="form_register__input form_register__input--number" type="number" name="" id="">
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
                <textarea maxlength="180" class="form_register__input form_register__input--textarea" name="" id="" cols="30" rows="10"></textarea>
            </div>

            <p class="form_register__label form_register__label--center">Filial y Gerencia</p>
            <div class="form_register__container form_register__container--affiliate">
                <div class="form_register__container">
                    <label class="form_register__label form_register__label--center" for="">Filial</label>
                    <select class="form_register__input form_register__input--select" name="" id="">
                        <option class="form_register__option">prueba1</option>
                        <option class="form_register__option">prueba2</option>
                        <option class="form_register__option">prueba3</option>
                        <option class="form_register__option">prueba4</option>
                    </select>
                </div>

                <div class="form_register__container">
                    <label class="form_register__label form_register__label--center" for="">Gerencia</label>
                    <select class="form_register__input form_register__input--select" name="" id="">
                        <option class="form_register__option">PRUEBA1</option>
                        <option class="form_register__option">PRUEBA2</option>
                        <option class="form_register__option">PRUEBA3</option>
                        <option class="form_register__option">PRUEBA4</option>
                    </select>
                </div>
            </div>

            <!-- <div class="form_register__container form_register__container--containerimagen">
                <label class="form_register__label form_register__label--center" for="">Foto</label>
                <div class="form_register__imagecontainer">
                    <img class="form_register__image" src="{{asset('images/Union.png')}}" alt="">
                </div>
            </div> -->

            <button class="form_register__submit" type="submit">Enviar</button>
        </form>

    </main>
</body>

</html>