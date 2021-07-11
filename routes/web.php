<?php
namespace App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos/exibir', [ControllerPromocao::class, 'index']);
Route::get('/produtos/inserir',[ControllerPromocao::class,'inserir']);
Route::get('/produtos/alterar',[ControllerPromocao::class,'alterar']);
Route::get('/produtos/excluir',[ControllerPromocao::class,'excluir']);
