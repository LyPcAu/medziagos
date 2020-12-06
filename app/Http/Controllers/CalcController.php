<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class CalcController extends Controller
{
    public function index(Request $request)
    {

    }

    public function create()
    {
        $wire_area=request('input_wire_area');
        $material=request('material');
        $length = request('input_length');
        (float)$temp=request('input_temp');
        $data['temp']=round($temp);
        if($data['temp']%2!=0)
        {
            $data['temp']++;
        }
        $coff = 0.00015;//DB::table($material)->where('temp',$data['temp'])->value('resistivity');
        $data['calc'] = ($coff*$length)/$wire_area;
        $data['calc_in_meter'] = $data['calc']/$length;

        return view('graph',$data);
        //return redirect()->route('graph.display')->with($data);//,$data);
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
