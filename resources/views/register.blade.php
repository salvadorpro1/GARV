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
            REGISTRO
        </h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form class="form_register" action="" method="POST">
            @csrf

            <div class="form_register__container">
                <label class="form_register__label" for="">Cedula</label>
                <input class="form_register__input form_register__input--number" type="number" name="cedula" id="">
            </div>

            <div class="form_register__container">
                <label class="form_register__label" for="">Nombre(s)</label>
                <input class="form_register__input" type="text" name="name" id="">
            </div>


            <div class="form_register__container">
                <label class="form_register__label" for="">Apellido(s)</label>
                <input class="form_register__input" type="text" name="lastname" id="">
            </div>

            <div class="form_register__container">
                <label class="form_register__label" for="">Razón de visita</label>
                <textarea maxlength="180" class="form_register__input form_register__input--textarea" name="reason" id="" cols="30" rows="10"></textarea>
            </div>

            <p class="form_register__label form_register__label--center">Filial y Gerencia</p>
            <div class="form_register__container form_register__container--affiliate">
                <div class="form_register__container">
                    <label class="form_register__label form_register__label--center" for="">Filial</label>
                    <select class="form_register__input form_register__input--select" name="subsidiary" id="subsidiary">
                        <option class="form_register__option">prueba1</option>
                        <option class="form_register__option">prueba2</option>
                        <option class="form_register__option">prueba3</option>
                        <option class="form_register__option">prueba4</option>
                    </select>
                </div>

                <div class="form_register__container">
                    <label class="form_register__label form_register__label--center" for="">Gerencia</label>
                    <select class="form_register__input form_register__input--select" name="management" id="management">
                        <option class="form_register__option">PRUEBA1A</option>
                        <option class="form_register__option">PRUEBA2A</option>
                        <option class="form_register__option">PRUEBA3A</option>
                        <option class="form_register__option">PRUEBA4A</option>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var subsidiarySelect = document.getElementById('subsidiary');
            var managementSelect = document.getElementById('management');

            subsidiarySelect.addEventListener('change', function() {
                var subsidiaryValue = this.value;

                // Limpiar opciones actuales
                managementSelect.innerHTML = '';

                // Agregar nuevas opciones según la opción seleccionada en Filial
                if (subsidiaryValue === 'prueba1') {
                    addOptionsToManagement(['PRUEBA1A', 'PRUEBA2A', 'PRUEBA3A', 'PRUEBA4A']);
                } else if (subsidiaryValue === 'prueba2') {
                    addOptionsToManagement(['PRUEBA1B', 'PRUEBA2B', 'PRUEBA3B', 'PRUEBA4B']);
                } else if (subsidiaryValue === 'prueba3') {
                    addOptionsToManagement(['PRUEBA1C', 'PRUEBA2C', 'PRUEBA3C', 'PRUEBA4C']);
                } else if (subsidiaryValue === 'prueba4') {
                    addOptionsToManagement(['PRUEBA1D', 'PRUEBA2D', 'PRUEBA3D', 'PRUEBA4D']);
                }
                // Puedes agregar más condiciones según sea necesario
            });

            // Función para agregar opciones al select de Gerencia
            function addOptionsToManagement(optionsArray) {
                optionsArray.forEach(function(optionText) {
                    var option = document.createElement('option');
                    option.textContent = optionText;
                    managementSelect.appendChild(option);
                });
            }
        });
    </script>
</body>

</html>