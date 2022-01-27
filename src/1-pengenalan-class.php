<?php
echo "Copyright (C) 2021  EmptyWork\n";

# abstract ContohClass {
class ContohClass {
  public $dataPublic;
  private $dataPrivate;
  protected $dataProtected;

  public function fungsiPublik() {
    echo "Fungsi Publik\n";
  }

  public static function fungsiStatikPublik() {
    echo "Fungsi yang di panggil langsung dari Kelas\n";
  }

  private function fungsiPrivate() {
    echo "Fungsi Private\n";
  }

  protected function fungsiProtected() {
    echo "Fungsi Protected\n";
  }

  final function fungsiFinal() {
    echo "Fungsi Final\n";
  }

  # abstract public function fungsiAbstrak();
}

ContohClass::fungsiStatikPublik();
$data = new ContohClass();
$data->fungsiPublik();
# $data->fungsiPrivate();
# $data->fungsiProtected();
$data->fungsiFinal();