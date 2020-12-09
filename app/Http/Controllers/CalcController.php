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
        (float)$wire_area=floatval(request('input_wire_area'));
		if($wire_area==0)
		{$wire_area=0.1;}
        $material=request('material');
        (float)$length = floatval(request('input_length'));
        (float)$temp=floatval(request('input_temp'));
        $data['temp']=round($temp);
        if($data['temp']%2!=0)
        {
            $data['temp']++;
        }
        (float)$coff = floatval(DB::table($material)->where('temp',$data['temp'])->value('resistivity'));
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
