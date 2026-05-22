@extends('/plantilla/layout')
<!-- SARAI FREGOZO ARÉCHIGA !-->
<!-- MARTIN GUADALUPE RUIZ MUÑOZ !-->
<!-- DIEGO ARMANDO MERCADO ACERO !-->
{{-- Colocar una seccion por cada yiel agregado en la plantilla --}}

{{-- section para titulo, este solo el texto, NO REQUIERE el endsection --}}
@section('titulo','- Registro')
    


{{-- setiono para el contenido  con componentes --}}
@section('contenido')


<form action="/administradores/{{$administrador->id}}/actualizar" method="POST"  enctype="multipart/form-data"  class="max-w-md mx-auto">
    @csrf
    <div class="relative z-0 w-full mb-5 group">
        <input value="{{$administrador->correo}}" type="email" name="correo" id="correo" maxlength="100" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="correo" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Correo</label>
    </div>
  
    <div class="relative z-0 w-full mb-5 group">
        <input value="{{$administrador->contraseña}}" type="password" name="contraseña" id="contraseña" minlength="8" maxlength="255" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="contraseña" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Contraseña</label>
    </div>
  
    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
          <input value="{{$administrador->nombres}}" type="text" name="nombres" id="nombres" maxlength="100" required
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              placeholder=" " />
          <label for="nombres" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Nombres</label>
      </div>
  
      <div class="relative z-0 w-full mb-5 group">
          <input value="{{$administrador->apellidos}}" type="text" name="apellidos" id="apellidos" maxlength="100" required
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              placeholder=" " />
          <label for="apellidos" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Apellidos</label>
      </div>
    </div>
  
    <div class="relative z-0 w-full mb-5 group">
        <input value="{{$administrador->username}}" type="text" name="username" id="username" maxlength="50" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">
         Nombre de usuario

        </label>
    </div>
  
    <div class="relative z-0 w-full mb-5 group">
        <img src="{{$administrador->imagen}}" alt="{{$administrador->imagen}}" width="100">
        <input type="file" name="imagen" accept="image/*" id="imagen"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" />
        <label for="imagen" class="peer-focus:font-medium text-sm text-gray-500 dark:text-gray-400">Imagen</label>
    </div>
  
    <div class="relative z-0 w-full mb-5 group">
        <select name="estado" id="estado" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer">
            <option value="" disabled selected>Seleccione el estado</option>
            <option value="Activo">activo</option>
            <option value="Inactivo">inactivo</option>
        </select>
        <label for="estado" class="peer-focus:font-medium text-sm text-gray-500 dark:text-gray-400">Estado</label>
    </div>
  
    <div class="relative z-0 w-full mb-5 group">
        <select name="rol" id="rol" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer">
            <option value="" disabled selected>Seleccione el rol</option>
            <option value="nivel 1">nivel 1</option>
            <option value="nivel 2">nivel 2</option>
        </select>
        <label for="rol" class="peer-focus:font-medium text-sm text-gray-500 dark:text-gray-400">Rol</label>
        
    </div>
  
    <div class="mb-4"> 
        <button type="submit"
          class='py-2.5 px-6 text-sm rounded-lg bg-green-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-green-700'>
          Guardar
        </button>
    </div>
    
    {{--<div>
        <a href="{{ url('/lista') }}" class="inline-flex items-center font-medium text-green-600 dark:text-green-500 hover:underline">
            Ver Administradores
        </a>
    </div>--}}
    

  </form>
  
@endsection