<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
  function __construct(Request $request)
  {
    $fator = $request['fator'];
    settype($fator, 'integer');
    $this->texto = new TextoController($fator);
  }
  
  function responder(Request $request)
  { 
    $this->texto->setTexto($request['texto']);
    //$this->conversor->setFator($request['fator']);//na instauração de conversor
    $teste = $this->toMainLoop(); // pra teste
    return response()->json(['msgm' => 'teste = ' . $teste, 'diag' => 'Aplicação finalizado com sucesso!']); //pra teste
  }

  function toMainLoop()
  {
    return $this->texto->loopTexto(); // pra teste
  }

  
}
