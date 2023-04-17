<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('items', 'App\Http\Controllers\Api\ItemController');