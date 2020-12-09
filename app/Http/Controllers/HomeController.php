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
        return view('main',$data);//-> with('data', json_encode($data, JSON_NUMERIC_CHECK));
    }
}
