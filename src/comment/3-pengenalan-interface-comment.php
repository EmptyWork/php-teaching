<?php
/**
 * @package Object-Oriented pada PHP
 * @author @EmptyWork <https://github.com/EmptyWork>
 * @version 0.0.3b - tambah: interface - versi komen - mirip abstract class
 * =================================
 * 
 * INTERFACE mirip dengan abstract class
 * merupakan sebuah template yang tidak
 * bisa di inisialisasi secara langsung, atau bisa
 * dijelaskan sebagai sebuah wireframe untuk class lain.
 * 
 * *********************************
 * 
 * Inisialisasi sebuah Interface
 * Dengan menggunakan syntax dibawah
 * ---------------------------------
 * @access public
 * interface NamaInterface {
 * 
 * }
 */

 interface Template {
  /**
   * Menginsialisasi sebuah method didalam interface
   * =============================
   * 
   * Mirip dengan penggunaan abstract method pada abstract class,
   * Sebuah Method yang termuat didalam interface juga tidak bisa
   * di panggil secara langsung oleh class turunan
   * tanpa 'mengoverride' method tersebut pada
   * class turunan (Children class).
   */
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

/**
 * Menggunakan ContohParent class sebagai parent class
 * dan menambahkan 2 interface — Template dan TemplateBaru
 * @access public
 */
class GunakanTemplate extends ContohParent implements Template, TemplateBaru {
  /**
   * Menginisialisasi proses 'override' semua method
   * turunan dari ContohParent class, Template interface
   * dan TemplateBaru interface
   */
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