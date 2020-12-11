<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class TheoryController extends Controller
{
    

    public function store(request $req)
    {
        $correct[0] = 'Nuo medžiagos rūšies, jos būsenos, matmenų ir temperatūros';
        $correct[1] = 'R = (p * l) / S';
        $correct[2] = 'Ne';
        $correct[3] = 'Taip';
		$correct[4] = 'Sumažinti temperatūrą';
		$correct[5] = 'Varža sumažės';
		$correct[6] = 'Puslaidininkių';
		$correct[7] = 'Omais Ω';
		$correct[8] = 'Varža padidėja, kadangi krūvininkai susiduria su daugiau medžiagos atomų.';
		$correct[9] = 'Laidininko priešinimasis elektros srovės tekėjimui';
		$countCorrect=0;
		$index = 0;
        foreach ($req->input() as $r) {
            for ($i = 0; $i < count($correct); $i++) {
                if ($r == $correct[$i]) {
                    $countCorrect++;
                }
            }
        }
        //return Redirect::back()->with('message','Teisingai atsakyta '.$countCorrect.' iš '.count($correct));
        return Redirect::back()->withInput($req->input())->with('message', 'Teisingai atsakyta ' . $countCorrect . ' iš ' . count($correct))
            ->with('');
    }

    public function show()
    {
        //// Klausimai
        $questions = ['Nuo ko priklauso metalų savitoji elektrinė varža?', 'Kokia bendroji laidininko ominės varžos formulė (p - savitoji elektrinė varžą, l – ilgis, S - plotas)?', 'Ar medžiagos laisvųjų krūvininkų kiekis nepriklauso nuo medžiagos negrynumo (įterptinių medžiagų)?', 'Ar kūnas turintis didėlę varža šyla greičiau nei kūnas turintis mažą varžą juo tekant elektros srovei?','Kaip padidinti medžiagos ilgį nepadidinus varžos ir skerspjūvio ploto?','Jeigu tiriama medžiaga yra cilindro formos, kaip pasikeis medžiagos varža padidinus cilindro skerspjūvio plotą?','Kokio tipo medžiagos varža mažėja kylant temperatūrai?','Kokiais vienetai matuojama varža:','Kas nutinka su varža metaluose sukėlus didesnį medžiagos atomų virpėjimą?','Kas yra savitoji varža? '];
        // Atsakymai: answers[klaumasId] = atsakymai;
        $answers[0] = ['Nuo temperatūros ir medžiagos matmenų', 'Nuo temperatūros ir medžiagos būsenos.', 'Nuo medžiagos rūšies, jos būsenos, matmenų ir temperatūros'];
        $answers[1] = ['R = S /(p * l)', 'R = (p * S) / l', 'R = (p * l) / S'];
        $answers[2] = ['Taip', 'Ne'];
        $answers[3] = ['Taip', 'Ne'];
		$answers[4] = ['Padidinti temperatūrą', 'Sumažinti temperatūrą','Teisingo atsakymo nėra'];
		$answers[5] = ['Varža sumažės', 'Varža padidės','Varža nepakis'];
		$answers[6] = ['Metalų', 'Super-laidininkų','Puslaidininkių'];
		$answers[7] = ['Amperais A', 'Omais Ω','Voltais V'];
		$answers[8] = ['Varža sumažėja kadangi atsiranda daugiau laisvųjų krūvininkų.', 'Varža padidėja, kadangi krūvininkai susiduria su daugiau medžiagos atomų.','Varža nepakinta.'];
		$answers[9] = ['Laidininko priešinimasis elektros įtampai.', 'Laidininko priešinimasis elektros srovės tekėjimui', 'Laidininko varžos kitimo pagal temperatūrą konstanta. '];
        //
        $correct[0] = 'Nuo medžiagos rūšies, jos būsenos, matmenų ir temperatūros';
        $correct[1] = 'R = (p * l) / S';
        $correct[2] = 'Ne';
        $correct[3] = 'Taip';
		$correct[4] = 'Sumažinti temperatūrą';
		$correct[5] = 'Varža sumažės';
		$correct[6] = 'Puslaidininkių';
		$correct[7] = 'Omais Ω';
		$correct[8] = 'Varža padidėja, kadangi krūvininkai susiduria su daugiau medžiagos atomų.';
        $correct[9] = 'Laidininko priešinimasis elektros srovės tekėjimui';
		
        return view('quiz', ['questions' => $questions, 'answers' => $answers, 'correct' => $correct]);
    }
}
