<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function index()
    {
        $result = null;
        return view('index', compact('result'));
    }
    public function calculate(Request $rq){
        $soA = $rq->soA;
        $soB = $rq->soB;
        $pheptoan = $rq->pheptoan;
        switch ($pheptoan){
            case 'Addition(+)':
                $result= $soA + $soB ;
                break;
            case 'Subtraction(-)':
                $result= $soA - $soB ;
                break;
            case 'Multiplication(*)':
                $result= $soA * $soB ;
                break;
            case 'Division(/)':
                try {
                    if ($soB == 0){
                        throw new \Exception("Can't division by 0");
                    }
                    $result = $soA / $soB;
                } catch (\Exception $e){

                    $result = "Message: ".$e->getMessage();
                }
        }
        return view('index', compact('result'));
    }
}
