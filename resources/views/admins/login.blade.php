<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 overflow-hidden"> 
  <section class="flex justify-center items-center min-h-screen relative">
    <img src="/imagenes/fondo.jpg" alt="gradient background image" class="absolute inset-0 w-full h-full object-cover z-0">
    <div class="mx-auto max-w-lg px-6 lg:px-8 absolute z-10 py-20">
      <img src="" alt="" class="mx-auto lg:mb-11 mb-8 object-cover">
      <div class="rounded-2xl bg-white shadow-xl p-7 sm:p-11">
        <form action="/administradores/in"   method="POST" class="space-y-4">
          @csrf
          <div class="text-center">
            <h1 class="text-gray-900 text-3xl font-bold leading-10 mb-2">¡Bienvenido!</h1>
          </div>

          <div>
            <label for="username" class="block text-gray-700 font-medium">Usuario</label>
            <input id="username"  name="username" type="text" class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none px-4">
          </div>

          <div>
            <label for="password" class="block text-gray-700 font-medium">Contraseña</label>
            <input id="contraseña" name="contraseña" type="password" class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none px-4">
          </div>

          <button type="submit" class="w-full h-12 text-white text-center text-base font-semibold leading-6 rounded-full hover:bg-indigo-800 transition-all duration-700 bg-indigo-600 shadow-sm">
            Entrar
          </button>

        </form>
        @error('credenciales')

        <span>{{$message}}</span>
            
        @enderror
      </div>
    </div>
  </section>
</body>


</html> 
