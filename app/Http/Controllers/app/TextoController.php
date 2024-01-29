<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextoController extends Controller
{
  private $analise; //objeto
  
  private $complChor = 12;
  private $texto;
  private $localEA;
  private $car;
  private $chor;

  public function __construct()
  {
    $this->analise = new AnaliseController();
  }

  function setTexto(String $texto)
  {
    $this->texto = $texto;
  }

  function carEA($i){
    $this->localEA = $this->analise->seEA($i, $this->car);
  }


  function carNatural($i){
    if($this->analise->seNatural($this->car)){
      $chor = substr($this->texto, $i, ($this->complChor+1)); //em texto
      return $chor . " "; //em texto
    }
  }

  function enviarChor($chor)
  {
    return $this->analise->analisar($chor);
  }

  function loopTexto()
  {
    $analise = $this->analise;
    $l = strlen($this->texto);

    for($i=0; $i<$l; $i++){ //faz a leitura do texto
      $this->car = $this->texto[$i];
      
      if($this->car == ' '){
        $analise->setOrdemDeAnalise('aberta');
        //pulei pre-positivo
        continue;
      }

      if($analise->getOrdemDeAnalise() == 'aberta'){
        $this->carEA($i);
        return $this->enviarChor($this->carNatural($i));
        //pulei $i = ($i + $this->analise->pularCaracteres);
        
      }//If (análise aberta)
    }//for
  }//loopText()



}
