<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/** Home */
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/categorias', [CategoryController::class, 'index']);

/** Produtos */
Route::get('/produto', [ProductController::class, 'product']);
Route::get('/produtos', [ProductController::class, 'products']);
Route::get('/produtos-listas', [ProductController::class, 'productList']);

/** Blog */
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog-post', [BlogController::class, 'post']);

/** Contato */
Route::get('/contato', [ContactController::class, 'index'])->name('contato');
Route::post('/contato/enviar-email', [ContactController::class, 'sendEmail']);


Route::get('/carrinho', [CartController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'logindo'])->name('login.do');

Route::get('/enviado-sucesso', [ContactController::class, 'sucessEmail'])->name('enviado-sucesso');


/**Teste rota e-email **/
Route::get('/email', function (){
        Mail::to('brunobbmp3@gmail.com')->send(new \App\Mail\StoreMail());
});

