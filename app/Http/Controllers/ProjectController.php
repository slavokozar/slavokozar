<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $articles = null;
        $aside = null;

        return view('public.home');
    }
}
