<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;

class CalcController extends Controller
{
    public function index()
    {


        return $this-('calc');
    }

    public function create()
    {

       // return show()


     // $result = DB::select"select * from ?", $materials[i]);
    }

    public function store()
    {
        //
    }

    public function show()
    {
        return view('graph');
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
