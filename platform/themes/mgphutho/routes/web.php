<?php

use Illuminate\Support\Facades\Route;
use Theme\Mgphutho\Http\Controllers\LanbanhController;
use Theme\Mgphutho\Http\Controllers\MgphuthoController;

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['controller' => MgphuthoController::class, 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Add your custom route here
        // Ex: Route::get('hello', 'getHello');
        Route::get('chi-phi-lan-banh', [LanbanhController::class, 'index'])->name('lanbanh.index');
        //Route::get('/get-category-product/{category}',[LanbanhController::class,'getCategoryProduct']);
        Route::get('/get-product/{product_id}',[LanbanhController::class,'getProduct']);
    });
});

Theme::routes();
