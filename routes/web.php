<?php
// SARAI FREGOZO ARÉCHIGA
// MARTIN GUADALUPE RUIZ MUÑOZ
// DIEGO ARMANDO MERCADO ACERO
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Storage;


// Ruta toggle: alterna storage/app/defaced entre 0 y 1 (solo local)
Route::get('/toggle-deface', function () {
    if (! app()->environment('local')) {
        abort(403, 'Solo disponible en entorno local.');
    }

    $flagPath = storage_path('app/defaced');

    // Crear carpeta si no existe
    if (! file_exists(dirname($flagPath))) {
        mkdir(dirname($flagPath), 0755, true);
    }

    $current = file_exists($flagPath) ? trim(file_get_contents($flagPath)) : '0';
    $new = $current === '1' ? '0' : '1';
    file_put_contents($flagPath, $new);
   
});



// Route::get('/', function () {
 //return view('welcome');
//});

Route::view('/admins', 'admins.login');

//vista princiapal
Route::view('/', 'index');
//vista de Acerca de nosotros
Route::view('/acercan', 'preview.acercan');
//vista de Contactanos
Route::view('/contact', 'preview.contact');
//vista de Team
Route::view('/team', 'preview.team');
//vista de FAQs
Route::view('/faq','preview.faq');
//vista de Termionos y condiciones
Route::view('/terms', 'preview.terms');

Route::view('/promotions', 'preview.promotions');

Route::view('/help', 'preview.help');

//Route::view('/', 'defaced');

//Rutas de CLIENTES
Route::get('/login', [ClientesController::class, 'login'])->name('login'); // Página de login si no está autenticado
Route::get('/clientes/in', [ClientesController::class, 'in']); // Enviar formulario de login
Route::post('/clientes/in', [ClientesController::class, 'in']);
Route::get('/registro', [ClientesController::class, 'registro'])->name('registro');
Route::post('/clientes/guardarRegistro', [ClientesController::class, 'guardarRegistro']);



Route::middleware('auth:clientes')->group(function(){

Route::view('/panel', 'plantilla.layout');


Route::get('/formularioClientes', [ClientesController::class, 'formularioClientes']);
Route::get('/listaClientes', [ClientesController::class, 'listaClientes']);
Route::post('/clientes/out', [ClientesController::class, 'out']);

Route::get('/perfil', [ClientesController::class,'perfil'])->name('perfil');
Route::get('/clientes/formularioClientes', [ClientesController::class,'formularioClientes']);
Route::post('/clientes/guardar', [ClientesController::class, 'guardar']);
Route::get('/clientes/{id}/editar', [ClientesController::class, 'editar']);
Route::post('/clientes/{id}/actualizar', [ClientesController::class, 'actualizar']);
Route::get('/clientes/{id}/mostrar', [ClientesController::class, 'mostrar']);
Route::post('/clientes/{id}/borrar', [ClientesController::class, 'borrar']);

});

//vistas de los productos
Route::view('/catalogoProductos','/productos/catalogoProductos');
Route::view('/registroProductos','/productos/registroProductos');
Route::view('/listaProductos','/productos/listaProductos');

//Controlador del CRUD de los productos
Route::get('/productos/registros', [ProductoController::class,'registros']);
Route::post('/productos/guardar', [ProductoController::class, 'guardar']);
Route::get('/productos/{id}/editar', [ProductoController::class, 'editar']);
Route::get('/productos/{id}/detalle', [ProductoController::class, 'detalle']);
Route::post('/productos/{id}/actualizar', [ProductoController::class, 'actualizar']);
Route::get('/productos/{id}/mostrar', [ProductoController::class, 'mostrar']);
Route::get('/catalogoProductos', [ProductoController::class, 'verProductos']);
Route::post('/productos/{id}/borrar', [ProductoController::class, 'borrar']);


//Rutas para carrito de compras
Route::view('cart','carrito/cart');
//AgregarProductos
Route::post('cart/add',[CartController::class,'add'])->name('add');
//vistadeCheoutProductos
Route::get('cart/checkout',[CartController::class,'checkout'])->name('checkout');
//limpiarProductos
Route::get('cart/clear',[CartController::class,'clear'])->name('clear');
//removerProductos
Route::post('cart/removeItem',[CartController::class,'removeItem'])->name('removeItem');

//pedidos
Route::get('pedidos/listaPedidos',[CartController::class,'hacerPedido'])->name('hacerPedido');

//Martin - proveedores y productos.
Route::get('/listaProveedores', [ProveedorController::class, 'listaProveedores']);
Route::get('/registroProveedores', [ProveedorController::class, 'registroProveedores']);

Route::get('/proveedores/listaProveedores', [ProveedorController::class, 'listaProveedores']);
Route::get('/proveedores/registroProveedores', [ProveedorController::class, 'registroProveedores']);
Route::post('/proveedores/guardar', [ProveedorController::class, 'guardar']);
Route::get('/proveedores/{id}/mostrar', [ProveedorController::class, 'mostrar']);
Route::get('/proveedores/{id}/editar', [ProveedorController::class, 'editar']);
Route::put('/proveedores/{id}/actualizar', [ProveedorController::class, 'actualizar']);
Route::delete('/proveedores/{id}/borrar', [ProveedorController::class, 'borrar']);