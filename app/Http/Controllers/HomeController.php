<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {


        $data['name'] = ['Aliuminis','Anglis','Konstantas', 'Varis', 'Germanis','Auksas',
        'Geležis', 'Švinas', 'Manganinas', 'Gyvsidabris', 'Nikromas', 'Platina', 'Silicis', 'Sidabras', 'Volframas'];
       $data['material_data'] = ['aluminum','carbon','constantan','copper','germanium','gold'
      ,'iron','lead','manganin', 'mercury','nichrome', 'platinum', 'silicon','silver','tungsten'];
        for ($i =0; $i<count($data['material_data']);$i++)
        {
            $data['coff'][$i] = DB::table($data['material_data'][$i])->where('temp','20')->value('resistivity');
        }
        return view('main',$data);//-> with('data', json_encode($data, JSON_NUMERIC_CHECK));
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
