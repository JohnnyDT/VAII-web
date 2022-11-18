<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculator;
use Illuminate\Contracts\View\View;

class CalculatorController extends Controller
{
    public function index(Calculator $calculator): View
    {
        $a = request()->input('a');
        $b = request()->input('b');

        $operation = request()->input('operation');
        $result = $calculator->calculate($operation, $a, $b);
        
        return view('calculator', [
            'operations' => $calculator->getOperations(),
            'result' => $result,
            'a' => $a,
            'b' => $b
        ]);
    }
}