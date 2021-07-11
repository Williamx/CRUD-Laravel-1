<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Modelpromocao;
class ControllerPromocao extends Controller
{
    public function index()
    {

         return view('produtos')->with('loja', Modelpromocao::exibir());
    }
    public function inserir()
    {

         return view('inserir')->with('loja', Modelpromocao::inserir());
    }
    public function alterar()
    {
         return view('alterar')->with('loja', Modelpromocao::alterar());
    }
    public function excluir()
    {

         return view('excluir')->with('loja', Modelpromocao::excluir());
    }



}
