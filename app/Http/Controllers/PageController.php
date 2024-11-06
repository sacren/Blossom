<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return View of index page
     */
    public function index()
    {
        return View::make('welcome');
    }
}
