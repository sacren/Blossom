<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    /**
     * Create a new controller instance for the index page.
     *
     * @return View of index page
     */
    public function index()
    {
        return View::make('welcome');
    }

    /**
     * Create a new controller instance for a specific page.
     *
     * @return View of page
     */
    public function show(string $name)
    {
        $view = 'page.'.$name;

        if (!View::exists($view)) {
            abort(404);
        }

        return View::make($view);
    }
}
