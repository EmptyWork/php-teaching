<?php
echo "Copyright (C) 2021  EmptyWork\n";

abstract class ContohAbstract {
  abstract public function methodPertama() :void;
  abstract public function methodKedua() :void;
}

class ContohTurunanAbstract extends ContohAbstract {
  
  public function methodPertama() :void {
    echo "Method Pertama";
  }

  public function methodKedua() :void {
    echo "Method Kedua";
  }

}

# class ContohTurunanAbstractTidakLengkap extends ContohAbstract {
#   public function methodPertama() :void {
#     echo "Method Kedua";
#   }
# }

# $contohAbstract = new ContohAbstract();
# $contohAbstract->data();

$contohClassAbstract = new ContohTurunanAbstract();
$contohClassAbstract->methodPertama();
$contohClassAbstract->methodKedua();

# $contohClassAbstractTidakLengkap = new ConthoTurunanAbstractTidakLengkap();
# $contohClassAbstractTidakLengkap->methodPertama();