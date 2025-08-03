<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'index']);

Route::get('/contact', [RouteController::class, 'contact']);

Route::get('/about', [RouteController::class, 'about']);

Route::get('/portfolio', [RouteController::class, 'portfolio']);

Route::get('/ui-ux-design', [RouteController::class, 'uiUxDesign']);

Route::get('/web-development', [RouteController::class, 'webDevelopment']);

Route::get('/mobile-development', [RouteController::class, 'mobileDevelopment']);

Route::get('/digital-marketing', [RouteController::class, 'digitalMarketing']);


