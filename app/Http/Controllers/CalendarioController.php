<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function index()
    {
        $calendarios = Calendario::all();
        return view('calendario.index', ['calendarios' => $calendarios]);
    }
}
