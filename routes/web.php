<?php

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/categorias', [CategoryController::class, 'index']);
Route::get('/produto', [ProductController::class, 'product']);
Route::get('/produtos', [ProductController::class, 'products']);
Route::get('/produtos-listas', [ProductController::class, 'productList']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog-post', [BlogController::class, 'post']);
Route::get('/contato', [ContactController::class, 'index'])->name('contato');
Route::post('/contato/enviar-email', [ContactController::class, 'sendEmail']);
Route::get('/contato/enviar-sucesso', [ContactController::class, 'sucessEmail'])->name('sucessEmail');

Route::get('/carrinho', [CartController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);

/**Teste rota e-email **/
Route::get('/email', function (){
        Mail::to('brunobbmp3@gmail.com')->send(new \App\Mail\StoreMail());
});

