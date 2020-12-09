<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TheoryController extends Controller
{
    public function index()
    {
        //
    }

	public function create()
    {
        //
    }

	public function store(request $req)
    {
        $correct[0] = 'Vilnius';
        $correct[1] = 'Gatvė';
        $correct[2] = 'Lempa';
        $correct[3] = 'Romanas';
        $countCorrect = 0;
        foreach ($req->input() as $r) {
            for($i = 0; $i < count($correct);$i++){
                if($r == $correct[$i]) {
                    $countCorrect++;
                }
            }
        }
        //return Redirect::back()->with('message','Teisingai atsakyta '.$countCorrect.' iš '.count($correct));
        return Redirect::back()->withInput($req->input())->with('message','Teisingai atsakyta '.$countCorrect.' iš '.count($correct))
            ->with('');
    }

	public function show()
    {
        //// Klausimai
        $questions = ['Miestas?','Vieta?','Daiktas?','Knyga?'];
        // Atsakymai: answers[klaumasId] = atsakymai;
        $answers[0] = ['Vilnius','Kaunas','Alytus','Panevėžys'];
        $answers[1] = ['Gatvė','Pastatas','Sklypas','Prospektas'];
        $answers[2] = ['Lempa','Stalas','Kėdė','Soda'];
        $answers[3] = ['Romanas','Poema','Drama','Epas'];
        //
        $correct[0] = 'Vilnius';
        $correct[1] = 'Gatvė';
        $correct[2] = 'Lempa';
        $correct[3] = 'Romanas';
        return view('quiz',['questions' => $questions, 'answers' => $answers, 'correct' => $correct]);
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
