<?php

use App\Htpp\Controllers\Site\SiteController;
use App\Http\Controllers\admin\supportcontroller;
use App\Http\Controllers\AndreController;
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

route::get('/supports', [supportcontroller::class, 'site'])->name('supports.index');

route::get('/laravel', [AndreController::class, 'visao'])->name('index.php');