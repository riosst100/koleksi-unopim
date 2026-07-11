<?php

use Illuminate\Support\Facades\Route;
use Koleksi\ProductDatabase\Http\Controllers\ProductDatabaseController;

Route::group(['middleware' => ['admin'], 'prefix' => config('app.admin_url')], function () {
    Route::controller(ProductDatabaseController::class)->prefix('product-database')->group(function () {
        Route::get('', 'index')->name('admin.product_database.index');
    });
});
