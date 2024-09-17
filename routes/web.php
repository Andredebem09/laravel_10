<?php

use App\Htpp\Controllers\Site\SiteController;
use App\Http\Controllers\admin\supportcontroller;
use App\Http\Controllers\AndreController;
use Illuminate\Support\Facades\Route;


route::get('/supports', [supportcontroller::class, 'site'])->name('supports.index');

route::get('/laravel', [AndreController::class, 'visao'])->name('index.php');