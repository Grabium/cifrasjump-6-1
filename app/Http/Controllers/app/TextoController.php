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
      $this->chor = $chor . " "; //em texto
      return $this->chor;
    }
  }
  

  function loopTexto()
  {
    $analise = $this->analise;
    $l = strlen($this->texto);

    for($i=0; $i<$l; $i++){ //faz a leitura do texto
      $this->car = $this->texto[$i];
      
      if($this->car == ' '){
        $analise->setOrdemDeAnalise('aberta');
        continue;
      }

      if($analise->getOrdemDeAnalise() == 'aberta'){
        $this->carEA($i);
        return $this->carNatural($i);
      }//If (análise aberta)
    }//for
  }//loopText()



}
