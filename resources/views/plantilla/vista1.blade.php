<!DOCTYPE html>
<!-- SARAI FREGOZO ARÉCHIGA !-->
<!-- MARTIN GUADALUPE RUIZ MUÑOZ !-->
<!-- DIEGO ARMANDO MERCADO ACERO !-->
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
            
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="/imagenes/file.png" class="mr-3 h-20 sm:h-24" alt="Biovida Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BioVida</span>
            </a>
            
            
                
                
               
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