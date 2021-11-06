<?php

/**
 * @package Object-Oriented pada PHP
 * @author @EmptyWork <https://github.com/EmptyWork>
 * @version 0.0.2g - ubah: mengstandarisasi komen-komen pada file
 * =================================
 * 
 * CLASS merupakan kerangka yang bisa digunakan
 * untuk membuat sebuah objek baru, dengan memanggil
 * class itu menggunakan keyword 'new'
 * 
 * *********************************
 * 
 * Inisialisasi sebuah class
 * Dengan menggunakan syntax dibawah
 * ---------------------------------
 * @access public
 * class NamaClass {
 * 
 * }
 */

# abstarct ContohClass {
class ContohClass {
  /**
   * Properties atau variables
   * @access public
   * @access private
   * @access protected
   */
  public $dataPublic;
  private $dataPrivate;
  protected $dataProtected;

  /**
   * Method yang modifiernya public
   * @access public
   */
  public function fungsiPublik() {
    echo "Fungsi Publik\n";
  }

  /** 
  * Method yang modifiernya public dan 
  * bisa di panggil tanpa harus membuat sebuah object
  * Contoh: ContohClass::fungsiStatikPublik();
  * @access public
  */
  public static function fungsiStatikPublik() {
    echo "Fungsi yang di panggil langsung dari Kelas\n";
  }

  /** 
  * Method yang modifiernya private
  * @access private
  */
  private function fungsiPrivate() {
    echo "Fungsi Private\n";
  }

  /** 
  * Method yang modifiernya protected
  * @access protected
  */
  protected function fungsiProtected() {
    echo "Fungsi Protected\n";
  }

  /** 
  * Method yang modifiernya final public; fungsi ini bersifat 'final'
  * atau tidak bisa di gantikan maupun di ubah oleh Subclass
  * @access public
  */
  final function fungsiFinal() {
    echo "Fungsi Final\n";
  }

  # abstract public function fungsiAbstrak();
}

// Contoh Pemanggilan Fungsi Publik Statik
ContohClass::fungsiStatikPublik();

// Inisialisasi Objek baru dari class ContohClass
$data = new ContohClass();

// Contoh Pemanggilan Fungsi Publik
$data->fungsiPublik();

/**
 * Contoh Pemanggilan method dengan modifier
 * @access private
 * @access public
 * 
 * =================================
 * Akan menghasilkan error pada console
 * karena method dengan tipe private dan protected tidak
 * bisa di panggil secara langsung pada scope global
 */

# $data->fungsiPrivate();
# $data->fungsiProtected();

// Contoh Pemanggilan Fungsi Public Final
$data->fungsiFinal();