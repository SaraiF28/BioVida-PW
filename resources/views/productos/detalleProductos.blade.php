<!-- SARAI FREGOZO ARÉCHIGA !-->
<!-- MARTIN GUADALUPE RUIZ MUÑOZ !-->
<!-- DIEGO ARMANDO MERCADO ACERO !-->
@extends('plantilla/layout')

@section('titulo', 'Detalles de Producto')

@section('contenido')
<section class="bg-gray-50 py-12 md:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-16">
            <!-- Imagen del producto -->
            <div class="flex justify-center">
                <div class="w-full max-w-lg rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('imagenes/'.$producto->imagen) }}" 
                         alt="{{ $producto->nombre }}"
                         class="w-full h-auto object-cover">
                </div>
            </div>

            <!-- Información del producto -->
            <div class="flex items-center">
                <div class="w-full max-w-md">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $producto->nombre }}</h1>
                    
                    <!-- Precio y rating -->
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <span class="text-2xl font-bold text-gray-900">{{ $producto->precio }}</span>
                            @if($producto->descuento)
                                <span class="ml-2 text-lg text-green-600">{{ $producto->descuento }} descuento</span>
                            @endif
                        </div>
                        <div class="flex items-center">
                            <!-- Rating con estrellas -->
                            <div class="flex mr-2">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= 4) <!-- 4 estrellas llenas -->
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @else <!-- 1 estrella vacía -->
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <a href="#" class="text-sm text-gray-500 hover:text-gray-700">1624 reseñas</a>
                        </div>
                    </div>

                    <!-- Descripción -->
                    <div class="mb-8">
                        <h2 class="text-lg font-semibold text-gray-900 mb-2">Descripción</h2>
                        <p class="text-gray-600">{{ $producto->descripcion }}</p>
                    </div>

                    <!-- Modelado y Existencia -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Modelado</h3>
                            <p class="text-lg font-medium text-gray-900">{{ $producto->modelado }}</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Existencia</h3>
                            <p class="text-lg font-medium text-gray-900">{{ $producto->existencia }} unidades</p>
                        </div>
                    </div>

                

                    <!-- Cantidad y botones -->
                    <div class="space-y-4">
                        <!-- Selector de cantidad -->
                        <div class="flex items-center border border-gray-300 rounded-full overflow-hidden max-w-xs">
                            <button class="px-4 py-2 bg-gray-100 text-gray-700 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <input type="text" value="1" class="w-12 text-center border-0 focus:ring-0">
                            <button class="px-4 py-2 bg-gray-100 text-gray-700 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!-- Botones de acción -->
                        <form action="{{ route('add') }}" method="post" class="mt-2">
                @csrf
                <input type="hidden" name="id" value="{{ $producto->id }}">
                <button type="submit" class="w-full py-2.5 px-6 text-sm rounded-full border border-solid border-green-500 text-green-600 cursor-pointer font-semibold text-center shadow-xs transition-all duration-100 hover:bg-green-700 hover:text-white flex items-center justify-center gap-2">
                    <svg class="stroke-green-600" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7394 17.875C10.7394 18.6344 10.1062 19.25 9.32511 19.25C8.54402 19.25 7.91083 18.6344 7.91083 17.875M16.3965 17.875C16.3965 18.6344 15.7633 19.25 14.9823 19.25C14.2012 19.25 13.568 18.6344 13.568 17.875M4.1394 5.5L5.46568 12.5908C5.73339 14.0221 5.86724 14.7377 6.37649 15.1605C6.88573 15.5833 7.61377 15.5833 9.06984 15.5833H15.2379C16.6941 15.5833 17.4222 15.5833 17.9314 15.1605C18.4407 14.7376 18.5745 14.0219 18.8421 12.5906L19.3564 9.84059C19.7324 7.82973 19.9203 6.8243 19.3705 6.16215C18.8207 5.5 17.7979 5.5 15.7522 5.5H4.1394ZM4.1394 5.5L3.66797 2.75"
                            stroke="" stroke-width="1.6" stroke-linecap="round"/>
                    </svg>
                    Agregar al carrito
                </button>
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection