<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class CalcController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $data['name'] = [
            'Aliuminis', 'Anglis', 'Konstantas', 'Varis', 'Germanis', 'Auksas',
            'Geležis', 'Švinas', 'Manganinas', 'Gyvsidabris', 'Nikromas', 'Platina', 'Silicis', 'Sidabras', 'Volframas'
        ];
        $data['material_data'] = [
            'aluminum', 'carbon', 'constantan', 'copper', 'germanium', 'gold', 'iron',
            'lead', 'manganin', 'mercury', 'nichrome', 'platinum', 'silicon', 'silver', 'tungsten'
        ];
        for ($i = 0; $i < count($data['material_data']); $i++) {
            $data['coff'][$i] = DB::table($data['material_data'][$i])->where('temp', '20')->value('resistivity');
        }

        $wire_area = request('input_wire_area');
        $material = request('material');
        $length = request('input_length');
        (float)$temp = request('input_temp');
        $data_2['temp'] = round($temp);
        if ($data_2['temp'] % 2 != 0) {
            $data_2['temp']++;
        }
        $coff = DB::table($material)->where('temp', $data_2['temp'])->value('resistivity');
        $data_2['calc'] = ($coff * $length) / $wire_area;
        $data_2['calc_in_meter'] = $data_2['calc'] / $length;

        return view('calc', $data)
            ->with('data', $data)
            ->with('data_2', $data_2)
            ->with('material', $material);
    }

    public function store()
    {
        //
    }

    public function show()
    {
        return view('calc');
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
