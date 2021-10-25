<?php

namespace App\Http\Controllers;

use App\Models\CalculoDeCombustivel;
use Illuminate\Http\Request;

class CombustivelController extends Controller
{
    public function index() {
        return view('consumo');
    }

    public function gasto() {
        $calculoCombustivel = new CalculoDeCombustivel();

        $valor = $calculoCombustivel->calcular();

        return view('resultado', compact('valor'));
    }
}
