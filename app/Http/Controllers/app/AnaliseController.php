<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnaliseController extends AuxiliarController
{ 
  private ConversorController $conversor;
  private CifraController $cifra;
  
  public function __construct(int $fator)
  {
    
    $this->conversor = new ConversorController($fator);
    $this->cifra = $this->conversor->cifra;
  }
  
  public function analisar($chor)
  {
    if(strlen($chor) == 2){
      return $this->positivo($chor);
    }
    
  }

  private function positivo($chor)
  {
    $antes = $chor;
    $chor = $this->conversor->conversor($chor);
    return '..' . $antes . '..foi convertido para:..' . $chor . '..!';
    
  }
}
