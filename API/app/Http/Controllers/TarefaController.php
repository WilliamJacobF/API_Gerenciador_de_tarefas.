<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index(){
        return Tarefa::all();
    }
    public function store(Request $request){
        Tarefa::create($request->all());
    }
    public function show($id){
        return Tarefa::findOrFail($id);
    }
    public function update(Request $request, $id){
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update($request->all());
    }
    public function destroy($id){
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update();
    }
}
