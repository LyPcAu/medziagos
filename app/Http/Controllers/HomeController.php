<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;

class HomeController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function about()
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