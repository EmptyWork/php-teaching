<?php
/**
 * @package Object-Oriented pada PHP
 * @author @EmptyWork <https://github.com/EmptyWork>
 * @version 0.0.2f - ubah: versi abstract - versi komen - kelas turunan tidak lengkap; error
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
  abstract public function methodPertama() :void; 
  abstract public function methodKedua() :void;

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
  public function methodPertama() :void {
    echo "Metho Pertama";
  }
  
  public function methodKedua() :void {
    echo "Method Kedua";
  }
}

/**
 * Pada Contoh dibawah ContohTurunanTidakLengkap class
 * menggunakan ContohAbstract class sebagai parent;
 * namun tidak semua method di 'override' oleh class tersebut
 */

# class ContohTurunanAbstractTidakLengkap extends ContohAbstract {
#   public function methodPertama() :void {
#     echo "Method Kedua";
#   }
# }

/**
 * Menginisialisasi sebuah objek baru dengan menggunakan
 * ContohAbstract class, ini akan mengakibatkan prompt 
 * error pada saat di jalankan.
 */
# $contohAbstract = new ContohAbstract();
# $contohAbstract->methodPertama();

$contohClassAbstract = new ContohTurunanAbstract();
$contohClassAbstract->methodPertama();

# $contohClassAbstractTidakLengkap = new ConthoTurunanAbstractTidakLengkap();
# $contohClassAbstractTidakLengkap->methodPertama();