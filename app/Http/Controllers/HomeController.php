<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\HTTP\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view('welcome');
    }
    public function about ()
    {
        return view('about');
    }

	public function create()
    {
        //
    }

	public function store()
    {
        //
    }

	public function show()
    {
        //
    }

	public function edit()
    {
        //
    }

	public function update()
    {
        //
    }

	public function destroy()
    {
        //
    }
}
