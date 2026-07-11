<?php

namespace Koleksi\ProductDatabase\Http\Controllers;

use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;

class ProductDatabaseController extends Controller
{
    /**
     * Display the product database page.
     */
    public function index(): View
    {
        return view('product_database::index');
    }
}
