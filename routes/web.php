<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'index']);

Route::get('/contact', [RouteController::class, 'contact']);

Route::get('/ui-ux-design', [RouteController::class, 'uiUxDesign']);
