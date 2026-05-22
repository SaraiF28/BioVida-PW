@extends('/plantilla/layout')
<!-- SARAI FREGOZO ARÉCHIGA !-->
<!-- MARTIN GUADALUPE RUIZ MUÑOZ !-->
<!-- DIEGO ARMANDO MERCADO ACERO !-->
{{-- Colocar una seccion por cada yiel agregado en la plantilla --}}

{{-- section para titulo, este solo el texto, NO REQUIERE el endsection --}}
@section('titulo','- Registro')
    


{{-- setiono para el contenido  con componentes --}}
@section('contenido')


<form action="/administradores/{{$administrador->id}}/borrar" method="POST" class="max-w-md mx-auto">
    @csrf
    <div class="relative z-0 w-full mb-5 group">
        <p class="text-sm text-gray-700 dark:text-gray-300">{{$administrador->correo}}</p>
    </div>

    <div class="relative z-0 w-full mb-5 group">
        <p class="text-sm text-gray-700 dark:text-gray-300">{{$administrador->contraseña}}</p>
    </div>

    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <p class="text-sm text-gray-700 dark:text-gray-300">{{$administrador->nombres}}</p>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <p class="text-sm text-gray-700 dark:text-gray-300">{{$administrador->apellidos}}</p>
        </div>
    </div>

    <div class="relative z-0 w-full mb-5 group">
        <p class="text-sm text-gray-700 dark:text-gray-300">{{$administrador->username}}</p>
    </div>

    <div class="relative z-0 w-full mb-5 group">
        <img src="{{$administrador->imagen}}" alt="{{$administrador->imagen}}" width="100" class="w-full max-w-xs rounded-lg shadow-md">
    </div>

    {{--<div class="relative z-0 w-full mb-5 group">
        <select name="estado" id="estado" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer">
            <option value="" disabled selected>Seleccione el estado</option>
            <option value="Activo">activo</option>
            <option value="Inactivo">inactivo</option>
        </select>
    </div>--}}

    {{--<div class="relative z-0 w-full mb-5 group">
        <select name="rol" id="rol" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer">
            <option value="" disabled selected>Seleccione el rol</option>
            <option value="nivel 1">nivel 1</option>
            <option value="nivel 2">nivel 2</option>
        </select>
    </div>--}}

    <div class="mb-4">
        <button type="submit"
            class='py-2.5 px-6 text-sm rounded-lg bg-green-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-green-700'>
            Borrar
        </button>
    </div>
</form>

  
@endsection