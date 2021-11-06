<?php

abstract class ContohAbstract {
  abstract public function data() :void; 
}

class ContohTurunanAbstract extends ContohAbstract {
  public function data() :void {
    echo "Hello";
  }
}

# $contohAbstract = new ContohAbstract();
# $contohAbstract->data();

$contohClassAbstract = new ContohTurunanAbstract();
$contohClassAbstract->data();