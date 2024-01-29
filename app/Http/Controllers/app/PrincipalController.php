<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
  function __construct()
  {
    $this->texto = new TextoController();
    $this->conversor = new ConversorController();
  }
  
  function responder(Request $request)
  { 
    $this->texto->setTexto($request['texto']);
    $this->conversor->setFator($request['fator']);
    $teste = $this->loopPrincipal(); // pra teste
    return response()->json(['msgm' => 'Valor / teste = ' .$teste, 'diag' => 'Aplicação finalizado com sucesso!']); //pra teste
  }

  function loopPrincipal()
  {
    $teste = $this->texto->loopTexto(); // pra teste
    return $teste;// pra teste
  }

  
}
