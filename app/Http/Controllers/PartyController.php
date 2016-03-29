<?php

namespace redeSocial\Http\Controllers;

use Illuminate\Http\Request;

use redeSocial\Http\Requests;

use redeSocial\Pessoa;



class PartyController extends Controller
{
    public function index() {
        $pessoas = Pessoa::all();
    	return view('rede.listagem')->with('pessoas', $pessoas);
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
