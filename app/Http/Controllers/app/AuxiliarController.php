<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuxiliarController extends Controller
{
  private $naturais = ['C','D','E','F','G','A','B'];

  private $ordem = 'aberta';

  function setOrdemDeAnalise(String $ordem) 
  {
    $this->ordem = $ordem;
  }

  function getOrdemDeAnalise()
  {
    return $this->ordem;
  }
  
  public function seEA($i, $car)
  {
    return (($car == "E")||($car == "A")) ? $i : false ;
  }

  public function seNatural($car)
  {
    return in_array($car, $this->naturais) ? true : false ; 
  }
  
}
