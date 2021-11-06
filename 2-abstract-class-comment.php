<?php
/**
 * @package Object-Oriented pada PHP
 * @author @EmptyWork <https://github.com/EmptyWork>
 * @version 0.0.2b - tambah: versi abstract - versi komen
 * =================================
 * 
 * Inisialisasi sebuah Abstract class
 * Dengan menggunakan syntax dibawah
 * /////////////////////////////////
 * Abstract class merupakan sebuah class yang tidak
 * bisa di inisialisasi secara langsung, atau bisa
 * dijelaskan sebagai sebuah wireframe untuk class lain.
 * ---------------------------------
 * @access public
 * abstract class NamaClass {
 * 
 * 
 * }
 */

abstract class ContohAbstract {
  /**
   * Menginisialisasi sebuah Abstract method
   * /////////////////////////////
   * Mirip dengan penggunaan Abstract pada class,
   * Sebuah Method yang abstract juga tidak bisa
   * di panggil secara langsung oleh class turunan
   * tanpa 'mengoverride' method tersebut pada
   * class turunan (Children class).
   * -----------------------------
   * @return void
   */
  abstract public function data() :void; 
}

/**
 * Menggunakan ContohAbstract class sebagai parent
 * dari ContohTurunanAbstract.
 * @access public
 */
class ContohTurunanAbstract extends ContohAbstract {
  /**
   * Menginisialisasi proses 'override' berdasarkan method
   * turunan dari ContohAbstract class.
   */
  public function data() :void {
    echo "Hello";
  }
}

/**
 * Menginisialisasi sebuah objek baru dengan menggunakan
 * ContohAbstract class, ini akan mengakibatkan prompt 
 * error pada saat di jalankan.
 */
# $contohAbstract = new ContohAbstract();
# $contohAbstract->data();

$contohClassAbstract = new ContohTurunanAbstract();
$contohClassAbstract->data();