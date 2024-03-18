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



<div class="container_list__paginate">
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
                « Previous
            </span>

            <a href="http://127.0.0.1:8000/lista?page=2" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                Next »
            </a>
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5 dark:text-gray-400">
                    Showing
                    <span class="font-medium">1</span>
                    to
                    <span class="font-medium">2</span>
                    of
                    <span class="font-medium">6</span>
                    results
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">

                    <span aria-disabled="true" aria-label="&amp;laquo; Previous">
                        <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5 dark:bg-gray-800 dark:border-gray-600" aria-hidden="true">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </span>





                    <span aria-current="page">
                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 dark:bg-gray-800 dark:border-gray-600">1</span>
                    </span>
                    <a href="http://127.0.0.1:8000/lista?page=2" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400 dark:hover:text-gray-300 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="Go to page 2">
                        2
                    </a>
                    <a href="http://127.0.0.1:8000/lista?page=3" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400 dark:hover:text-gray-300 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="Go to page 3">
                        3
                    </a>


                    <a href="http://127.0.0.1:8000/lista?page=2" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="Next &amp;raquo;">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </nav>

</div>