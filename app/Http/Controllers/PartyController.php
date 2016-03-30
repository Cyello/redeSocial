<?php

namespace redeSocial\Http\Controllers;

use Illuminate\Http\Request;

use redeSocial\Http\Requests;

use redeSocial\Pessoa;
use redeSocial\Evento;



class PartyController extends Controller
{
    public function index() {
        $eventos = Evento::all();
    	return view('rede.listagem')->with('eventos', $eventos);
    }

    public function criar() {

    }

    public function salvar() {

    }

    public function editar($id) {
    	return 'Editando '.$id;
    }

    public function atualizar($id) {

    }

    public function remover($id) {

    }
}
