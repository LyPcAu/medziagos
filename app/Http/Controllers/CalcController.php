<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class CalcController extends Controller
{
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


        (float)$wire_area = request('input_wire_area');
        $material = request('material');
        for ($i = 0; $i < count($data['material_data']); $i++) {
            if($material==$data['material_data'][$i])
            {
                $medziaga = $data['name'][$i];
            }
        }
        (float)$length = request('input_length');
        (float)$temp = request('input_temp');
        $data_2['temp'] = round($temp);
        if ($data_2['temp'] % 2 != 0) {
            $data_2['temp']++;
        }
        $coff =DB::table($material)->where('temp', $data_2['temp'])->value('resistivity');
        (float)$data_2['calc'] = ($coff * $length) / $wire_area;
        (float)$data_2['calc_in_meter'] = $data_2['calc'] / $length;

        return view('calc', $data)
            ->with('data', $data)
            ->with('data_2', $data_2)
            ->with('material', $material)
            ->with('coff',$coff)
            ->with('medziaga',$medziaga)
            ->with('wire_area',$wire_area)
            ->with('length',$length);
    }
}
