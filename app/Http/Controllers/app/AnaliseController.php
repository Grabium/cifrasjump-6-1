<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnaliseController extends AuxiliarController
{
  private $ordem;
  
  function setOrdemDeAnalise(String $ordem) 
  {
    $this->ordem = $ordem;  
    //return $this->ordem;
  }

  function getOrdemDeAnalise()
  {
    return $this->ordem;
  }
}
