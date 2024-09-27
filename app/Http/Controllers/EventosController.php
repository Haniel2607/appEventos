<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;
use Illuminate\Support\Facades\Redirect;

class EventosController extends Controller
{
    //mostrar tela administrativa
    public function MostrarHome(){
        return view('homeadm');
    }

    //mostar tela de cadastro de eventos
    public function MostrarCadastroEvento(){
        return view('cadastroevento');
    }

    //salvar registros na tabela eventos
    public function CadastrarEventos(Request $request){
        $registro = $request->validate([
            'nomeEvento' => 'string|required',
            'dataEvento' => 'date|required',
            'localEvento' => 'string|required',
            'imgEvento' => 'string|required',
        ]);

        Eventos::create($registro);
        return Redirect::route('home-adm');
    }

    //apagar registros na tabela eventos
    public function Destroy(Eventos $id){
        $id->delete();
        return Redirect::route('home-adm');
    }

    //alterar registros na tabela eventos
    public function Update(Eventos $id, Request $request){
        $registro = $request->validate([
            'nomeEvento' => 'string|required',
            'dataEvento' => 'date|required',
            'localEvento' => 'string|required',
            'imgEvento' => 'string|required',
        ]);

        $id->fill($registro);
        $id->save();

        return Redirect::route('home-adm');
    }

    //mostrar eventos por id
    public function MostrarEventoCodigo(Eventos $id){
        return view('alteraevento', ['registrosEvento' => $id]);
    }

    //buscar eventos por nome
    public function MostrarEventoNome(Request $request){
        $registros = Eventos::query();
        $registros->when($request->nomeEvento, function($query, $valor){
            $query->where('nomeEvento', 'like', '%'.$valor.'%');
        });
        $todosRegistros = $registros->get();
        return view('listaeventos', ['registrosEvento' => $todosRegistros]);
    }

}