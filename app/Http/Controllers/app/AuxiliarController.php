<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuxiliarController extends Controller
{
  private $naturais = ['C','D','E','F','G','A','B'];
  
  public function seEA($i, $car)
  {
    if(($car == "E")||($car == "A")){
      return $i;
    }
    return false;
  }

  public function seNatural($car){
    if(in_array($car, $this->naturais)){ 
      return true;
    }else{
      return false;
    }
  }
  
}
