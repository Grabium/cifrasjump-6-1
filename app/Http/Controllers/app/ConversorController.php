<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConversorController extends Controller
{
  private int $fator;
  public CifraController $cifra;

  public function __construct(int $fator)
  {
    $this->cifra = new CifraController();
    $this->setFator($fator);
  }


  function setFator($fator)
  { 
    settype($fator, 'integer');
    $this->fator = $fator;
  }

  public function conversor($chor)
  {
    return 'converter';
  }
}
