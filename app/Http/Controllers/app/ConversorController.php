<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConversorController extends Controller
{
  private $fator;

  function setFator($fator)
  { 
    settype($fator, 'integer');
    $this->fator = $fator;
  }
}
