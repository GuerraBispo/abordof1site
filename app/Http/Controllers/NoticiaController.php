<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('noticia.index', ['tarefas' => $tarefas]);
    }
}
