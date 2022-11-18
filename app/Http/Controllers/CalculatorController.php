<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculator;
use Illuminate\Contracts\View\View;

class CalculatorController extends Controller
{
    public function index(Calculator $calculator): View
    {
        return view('calculator', [
            'operations' => $calculator->getOperations(),
        ]);
    }
}