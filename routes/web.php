<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\DetalleCotizaController;
use App\Http\Controllers\PeticionController;
use App\Http\Controllers\PeticionCotizaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UserController;
use App\Models\Cliente;
use App\Models\Cotizacion;
use App\Models\PeticionCotiza;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home_user');

Route::get('/dashboard', function () {
    $cotizaciones = Cotizacion::count();
    $clientes = Cliente::count();
    $usuarios = User::count();
    $posts = Post::count();
    $peticionCotizas = PeticionCotiza::count();
    return view('dashboard', compact("cotizaciones", "clientes", "usuarios", "posts", "peticionCotizas"));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contacts')->name('contact');
Route::view('/info', 'info')->name('information');

/**
 * En esta seccion de veran reflejadas las rutas de los clientes
 */

Route::resource('cliente', ClienteController::class)
->only('index', 'store', 'update', 'destroy')
->middleware('auth');
Route::get('/searchClientes',[ClienteController::class,'show'])->name('cliente.show')
->middleware('auth');


/**
 * En esta seccion de veran reflejadas las rutas de las cotizaciones
 */
Route::resource('cotizacion', CotizacionController::class)
->only('index', 'create','store', 'edit', 'update', 'destroy')->middleware('auth');

Route::get('/cotizaciones/view/ListCotizas',[CotizacionController::class, 'cotizaPDF'])->name('cotizacion.pdf')->middleware('auth');

Route::post('/detalleCotiza', [DetalleCotizaController::class,'store'])->name('detalleCotiza.store')->middleware('auth');
Route::delete('/detalleCotiza/elminar', [DetalleCotizaController::class,'destroy'])->name('detalleCotiza.destroy')->middleware('auth');

Route::get('/buscarProducto',[ProductoController::class, 'buscarProductos'])->name('productos.search')->middleware('auth');



/**
 * En esta seccion se veran reflejadas las rutas de los posts.
 */
Route::resource('posts', PostController::class)
->only('index','show','create','store','edit','update','destroy');
// Ruta para mostrar la lista de los posts publicados.
Route::get('/postList', [PostController::class, 'viewPosts'])->name('ListPost')->middleware('auth');



/**
 * En esta seccion se ven reflejadas la ruta para los asuntos a tratar.
 */
Route::post('peticion/enviar', [PeticionController::class, 'peticionAsunto'])->name('peticion.peticionAsunto');


/**
 * En esta seccion se veran reflejadas las rutas de los comentarios.
 */
Route::get('/posts/{id}#comments',[CommentController::class,'index'])->name('comments.index');
Route::resource('comments', CommentController::class)
->only('store','edit','update', 'store','destroy')
->middleware('auth');

/**
 * En esta sección se verán reflejadas las rutas de las secciones del Post.
 */
Route::get('/sections/post:{id}',[SectionsController::class,'index'])->name('sections.index')->middleware('auth');
Route::resource('/sections',SectionsController::class)
->only('store','destroy','edit','update')->middleware('auth');



/**
 * En esta seccion se veran reflejadas las rutas del administrador de usuarios.
 */
Route::resource('users', UserController::class)
->only('index','create','store','edit','update','destroy')->middleware('auth');


/**
 * En esta seccion se veran reflejados los servicios que cree la empresa.
 */

 Route::resource('service',ServicioController::class)
 ->only('index','store','update','destroy')->middleware('auth');
 Route::get('/services', [ServicioController::class, 'listarServicios'])->name('service');
 Route::get('/services/servicio_id={id}', [ServicioController::class, 'show'])->name('services.show');

 Route::resource('peticionCotiza',PeticionCotizaController::class)
 ->only('index','store');

 Route::patch('peticionCotiza/actualizar', [PeticionCotizaController::class, 'update'])->name('peticionCotiza.update');

/**
 * En esta sección se encuentra la seccion en la que se podran visualizar las peticiones realizadas por contacto.
 */

 Route::resource('buzon', PeticionController::class)
 ->only('index','show');

 Route::patch('peticion/buzon/actualizar', [PeticionController::class, 'update'])->name('buzon.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
