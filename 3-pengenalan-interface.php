<?php
interface Template {
  public function methodPertama();
  public function methodKedua();
}

class ContohParent {
  public function methodParent() {
    echo "Method dari class Parent \n";
  }
}

interface TemplateBaru {
  public function methodTambahan();
}

class GunakanTemplate extends ContohParent implements Template, TemplateBaru {
  public function methodPertama() {
    echo "Method Pertama \n";
  }
  public function methodKedua() {
    echo "Method Kedua \n";
  }

  public function methodTambahan() {
    echo "Method Tambahan \n";
  }
}

$template = new GunakanTemplate();

$template->methodPertama();
$template->methodKedua();
$template->methodTambahan();
$template->methodParent();