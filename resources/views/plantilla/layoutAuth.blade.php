<!-- SARAI FREGOZO ARÉCHIGA !-->
<!-- MARTIN GUADALUPE RUIZ MUÑOZ !-->
<!-- DIEGO ARMANDO MERCADO ACERO !-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="../path/to/src/pagedone.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    @vite('resources/css/app.css')

    <title>BioVida @yield('titulo')</title>
  
</head>

<header class="mb-6">  
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 shadow">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <!-- Logo más grande -->
            <a href="{{ url('/lista') }}" class="flex items-center">
                <img src="/imagenes/file.png" class="mr-3 h-20 sm:h-24" alt="Biovida Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BioVida</span>
            </a>
            
            <!-- Contenedor de menú y dropdown -->
            <div class="flex items-center space-x-8">
                <!-- Menú centrado y con más espacio entre elementos -->
                <div class="hidden lg:flex flex-grow justify-center" id="mobile-menu-2">
                    <ul class="flex flex-col lg:flex-row lg:space-x-12 mt-4 lg:mt-0">
                         @auth('admins')
                         @if(auth('admins')->user()->isNivel1())
                            <li>
                                <a href="{{ url('/lista') }}" class="block py-2 px-4 font-semibold text-gray-700 rounded-lg hover:bg-gray-100 active:shadow-lg dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                Administradores
                                </a>
                            </li>
                        @endif
                        @endauth
                        <li>
                            <a href="{{ url('/formularioClientes') }}" class="block py-2 px-4 font-semibold text-gray-700 rounded-lg hover:bg-gray-100 active:shadow-lg dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                Clientes
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/registroProveedores') }}" class="block py-2 px-4 font-semibold text-gray-700 rounded-lg hover:bg-gray-100 active:shadow-lg dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                Proveedores
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/productos/registros') }}" class="block py-2 px-4 font-semibold text-gray-700 rounded-lg hover:bg-gray-100 active:shadow-lg dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                Productos
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/formularioPedidos') }}" class="block py-2 px-4 font-semibold text-gray-700 rounded-lg hover:bg-gray-100 active:shadow-lg dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                Pedidos
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Dropdown alineado a la derecha -->
              
                   
                {{-- @auth('admins')  --}}
                <div class="dropdown relative inline-flex">
                    <!-- Foto del admin como botón del dropdown -->
                    <button type="button" data-target="dropdown-with-header" class="dropdown-toggle inline-flex justify-center items-center gap-2">
                        <img src="{{ asset('storage/' . auth('admins')->user()->imagen) }}" class="w-10 h-10 rounded-full object-cover border-2 border-indigo-600" alt="Foto de perfil">
                    </button>
                
                    <div id="dropdown-with-header" class="dropdown-menu rounded-xl shadow-lg bg-white absolute right-0 top-full w-72 mt-2 divide-y divide-gray-200 hidden" aria-labelledby="dropdown-with-header">
                        <div class="px-4 py-3 flex gap-3">
                            <div class="block mt-1">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3331 5.83333C13.3331 7.67428 11.8407 9.16667 9.99976 9.16667C8.15881 9.16667 6.66642 7.67428 6.66642 5.83333C6.66642 3.99238 8.15881 2.5 9.99976 2.5C11.8407 2.5 13.3331 3.99238 13.3331 5.83333Z" stroke="black" stroke-width="1.6" />
                                    <path d="M9.99976 11.6667C7.62619 11.6667 5.54235 12.752 4.36109 14.3865C3.73609 15.2513 3.42359 15.6837 3.88775 16.5918C4.35192 17.5 5.12342 17.5 6.66642 17.5H13.3331C14.8761 17.5 15.6476 17.5 16.1118 16.5918C16.5759 15.6837 16.2634 15.2513 15.6384 14.3865C14.4572 12.752 12.3733 11.6667 9.99976 11.6667Z" stroke="black" stroke-width="1.6" />
                                </svg>
                            </div>
                            <div class="block">
                                <div class="text-indigo-600 font-normal mb-1">{{ auth('admins')->user()->nombres }} {{ auth('admins')->user()->apellidos }}</div>
                                <div class="text-sm text-gray-500 font-medium truncate">{{ auth('admins')->user()->correo }}</div>
                            </div>
                        </div>
                        <ul class="py-2">
                            <li>
                                <a class="block px-6 py-2 hover:text-indigo-600 text-gray-900 font-medium" href="#">Downloads</a>
                            </li>
                            <li>
                                <a class="block px-6 py-2 hover:text-indigo-600 text-gray-900 font-medium" href="#">Saved Files</a>
                            </li>
                            <li>
                                <a class="block px-6 py-2 hover:text-indigo-600 text-gray-900 font-medium" href="#">Notifications</a>
                            </li>
                        </ul>
                
                        <!-- Botón de cerrar sesión alineado y en rojo -->
                        <form action="/administradores/out" method="POST" class="py-2">
                            @csrf
                            <button type="submit" class="block w-full text-left px-6 py-2 text-red-500 font-medium hover:bg-red-100">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
                {{-- @endauth --}}
                
               
            </div>
        </div>
    </nav>
</header>




</body>
    @yield('contenido')

    

    <script src="../path/to/src/pagedone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="/js/botoncont.js"></script>
    <script src="/js/sub.js"></script>
    

</body>


<footer class="w-full">
    <div class="mx-auto max-w-7xl">
        <!-- Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-4 2xl:grid-cols-6 gap-8 py-10">
            <!--<div class="col-span-full mb-10 2xl:col-span-2 lg:mb-0 flex flex-col items-center 2xl:items-start">
                <a href="{{ url('/index') }}" class="flex justify-center lg:justify-start">
                    <img src="" alt="Descripción de la imagen" class="mt-4 w-32" />
                </a>
            </div>-->
        </div>
    </div>

    <!-- Línea del footer -->
    <div class="w-full border-t border-gray-200 py-4">
        <div class="flex items-center justify-center">
            <span class="text-sm text-gray-500">© <a href="{{ url('/lista') }}">BioVida</a> 2025, All rights reserved.</span>
        </div>
    </div>
</footer>



</html>