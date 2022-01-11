<?php
/**
 * @package Object-Oriented pada PHP
 * @author @EmptyWork <https://github.com/EmptyWork>
 * @version 0.0.4b - tambah: pengenalan __construct fungsi - versi komen
 * =================================
 * 
 * __CONSTRUCT merupakan fungsi yang akan 
 * dijalankan pada saat Class pertama kali 
 * di panggil atau di buat.
 * 
 * *********************************
 * 
 * pemanggilan fungsi ini dengan menggunakan
 * ---------------------------------
 * public function __construct() {
 * 
 * }
 */

class ContohClassKonstruk {
  public $data1;
  public $data2;
  /**
   * Membuat sebuah method konstruktor yang akan
   * dijalankan setiap kali objek di bentuk dari
   * ContohClass atau subclass dari ContohClass
   * selama tidak di @override oleh subclass
   * tersebut.
   * @access public
   * 
   */
  public function __construct($__data1, $__data2)
  {
    $this->data1 = $__data1;
    $this->data2 = $__data2;
    /**
     * Contoh Method yang secara otomatis 
     * dijalankan pada saat sebuah Objek baru di buat.
     */
    $this->tampilkanDataLewat__construct();
  }

  protected function tampilkanDataLewat__construct() {
    echo 'Fungsi yang di panggil pada saat Objek dibuat: '.$this->data1.' '.$this->data2."\n";
  }

  public function tampilkanData() {
    echo $this->data1.' '.$this->data2."\n";
  }
}

$CONTOHCLASS = new ContohClassKonstruk('satu', 2);

echo "+++++++++++++++++++++++++++++++++++++\n";

sleep(5);

for ($i=0; $i < 5; $i++) { 
  $CONTOHCLASS->tampilkanData();
}