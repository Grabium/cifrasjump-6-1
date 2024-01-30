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

  public function __construct(int $fator)
  {
    $this->analise = new AnaliseController($fator);
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
      $chor = substr($this->texto, $i, ($this->complChor+1));
      return $chor . " ";
    }else{
      return false;
    }
  }

  function enviarChor($chor)
  {
    echo '$chor :' . $chor . '..';
    return $this->analise->analisar($chor);
  }

  function loopTexto()
  {
    $analise = $this->analise;
    $l = strlen($this->texto);

    for($i=0; $i<$l; $i++){ 
      $this->car = $this->texto[$i];
      
      if($this->car == ' '){
        $analise->setOrdemDeAnalise('aberta');
        continue;
      }

      if($analise->getOrdemDeAnalise() == 'aberta'){
        $this->carEA($i);
        
        if($chor = $this->carNatural($i)){
          return $this->enviarChor($chor);
          //pulei $i = ($i + $this->analise->pularCaracteres);
        }

        
        
        
      }//If (análise aberta)
    }//for
  }//loopText()



}
