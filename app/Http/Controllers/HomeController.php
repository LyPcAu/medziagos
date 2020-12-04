<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;

class HomeController extends Controller
{
    public function index()
    {
        $data['name'] = ["Aliuminis","Anglis","Konstantas", "Varis", "Germanis","Auksas",
        "Geležis", "Švinas", "Manganinas", "Gyvsidabris", "Nikromas", "Platina", "Silicis", "Sidabras", "Volframas"];
       $data['material_data'] = ["aluminum","carbon","constantan","copper","germanium","gold"
      ,"iron","lead","manganin", "mercury","nichrome", "platinum", "silicon","silver","tungsten"];
        return view('main',$data);
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
