<?php

class ContohClass {
  public $data1;
  public $data2;
  public function __construct($__data1, $__data2)
  {
    $this->data1 = $__data1;
    $this->data2 = $__data2;
    $this->tampilkanDataLewat__construct();
  }

  protected function tampilkanDataLewat__construct() {
    echo 'Fungsi yang di panggil pada saat Objek dibuat: '.$this->data1.' '.$this->data2."\n";
  }

  public function tampilkanData() {
    echo $this->data1.' '.$this->data2."\n";
  }
}

$CONTOHCLASS = new ContohClass('satu', 2);
echo "+++++++++++++++++++++++++++++++++++++\n";
sleep(5);
for ($i=0; $i < 5; $i++) { 
  $CONTOHCLASS->tampilkanData();
}