<!-- SARAI FREGOZO ARÉCHIGA !-->
<!-- MARTIN GUADALUPE RUIZ MUÑOZ !-->
<!-- DIEGO ARMANDO MERCADO ACERO !-->
@extends('/plantilla/layout')

@section('titulo', 'Inicio')

@section('contenido')

    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 md:px-5 lg:px-5">
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="flex flex-col gap-10 items-center lg:items-start">
                    <div class="flex flex-col gap-4 text-center lg:text-left">
                        <h2 class="text-4xl font-bold text-gray-900 font-manrope">¡Bienvenidos!</h2>
                        <p class="text-base text-gray-500 leading-relaxed" style="text-align: justify;">
    Nuestra página está dedicada a la venta de productos biodegradables desechables. Aquí
    encontrarás soluciones sostenibles para reducir el impacto ambiental de tus actividades diarias.
    Desde cubiertos hasta empaques, todos nuestros productos están diseñados pensando en el planeta.
    Explora nuestra oferta y únete a la lucha contra el plástico.
</p>

                    </div>
                </div>
                <img class="rounded-3xl object-cover w-full" src="/imagenes/pexels-akilmazumder-4763942.jpg"
                    alt="about Us image" />
            </div>
        </div>
    </section>


                                                   <!-- Custom Style -->
<style>
.lightbox {
  display: none;
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  overflow:hidden;
  background-color: rgba(0, 0, 0, 0.8);
}
.lightbox-image {
  display: block;
  margin: auto;
  max-width: 100%;
 max-height: 100%;
}
.close {
  color: #fff;
  font-size: 3em;
  position: absolute;
  top: 20px;
  right: 30px;
  cursor: pointer;
}
.gallery {
  width: 90vw;
  max-width: 1200px;
  margin: 0 auto;
  grid-template-rows: 1fr;
  grid-column-gap: 30px;
  grid-row-gap: 30px;
  
}
.gallery img {
  max-width: 100%;
  cursor: pointer;
}
.gallery img:hover {
  max-width: 100%;
  cursor: pointer;
}
</style>
 <section class="py-24"> 
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid gap-2.5 lg:pb-16 pb-10">
      <h2 class="w-full text-center text-gray-900 text-4xl font-bold font-manrope leading-normal">Our Gallery</h2>
      <div class="w-full text-center text-gray-600 text-lg font-normal leading-8">Step into a realm where art comes to life.</div>
    </div>
    <div class="gallery">
      <div class="flex flex-col mb-10">
        <div class="grid md:grid-cols-12 gap-8 lg:mb-11 mb-7">
          <div class="md:col-span-4 h-[500px] w-full rounded-3xl">
            <img src="/imagenes/gale1.jpg" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
          </div>
          <div class="md:col-span-8 h-[500px] w-full rounded-3xl">
            <img src="/imagenes/gale2.jpg" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
          </div>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
          <div class="h-[350px] w-full rounded-3xl">
            <img src="/imagenes/gale3.jpg" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
          </div>
          <div class="h-[350px] w-full rounded-3xl">
            <img src="/imagenes/gale4.jpg" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
          </div>
          <div class="h-[350px] w-full rounded-3xl">
            <img src="/imagenes/gale5.jpg" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lightbox" id="lightbox">
    <span class="close" id="close">&times;</span>
    <img src="" alt="" class="lightbox-image" id="lightbox-image">
  </div>
</section>
<!-- Initialize Swiper -->
<script>
  // Get references to elements
  const gallery = document.querySelector('.gallery');
  const lightbox = document.getElementById('lightbox');
  const lightboxImage = document.getElementById('lightbox-image');
  const closeButton = document.getElementById('close');

  // Add event listener to each image
  gallery.addEventListener('click', e => {
    if (e.target.classList.contains('gallery-image')) {
      const imageSrc = e.target.src;
      lightboxImage.src = imageSrc;
      lightbox.style.display = 'flex';
    }
  });

  // Close lightbox when close button is clicked
  closeButton.addEventListener('click', () => {
    lightbox.style.display = 'none';
  });

  // Close lightbox when clicking outside the image
  lightbox.addEventListener('click', e => {
    if (e.target === lightbox) {
      lightbox.style.display = 'none';
    }
  });
</script>
                                            

    <section class="bg-white py-8 md:py-16 bg-gray-50 dark:bg-gray-900 antialiased"> 
  <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-12 lg:gap-12 items-center">
    
    <!-- Texto -->
    <div class="md:col-span-7 text-center md:text-left">
      <h1 class="text-4xl md:text-5xl xl:text-6xl font-extrabold dark:text-dark mb-4">¡No dejes pasar esta oportunidad!</h1>
      <p class="text-gray-500 dark:text-gray-400 text-lg lg:text-xl mb-6">¡Aprovecha un 30% de descuento en productos seleccionados y ahorra en grande!</p>
      
      <button id="contactButton" type="button" onclick="window.location.href='{{ url('/catalogoProductos') }}';"
        class="py-2 px-5 text-sm rounded-full bg-green-500 text-white font-semibold hover:bg-green-700 transition-all duration-300">
        Ver Ahora
      </button>
    </div>

    <!-- Imagen -->
    <div class="md:col-span-5 hidden md:flex justify-center">
      <div class="h-[400px] w-full max-w-md rounded-3xl overflow-hidden">
        <img src="/imagenes/descuento.jpg" alt="Gallery image" class="object-cover w-full h-full rounded-3xl hover:grayscale transition-all duration-700 ease-in-out">
      </div>
    </div>

  </div>
</section>
@endsection

