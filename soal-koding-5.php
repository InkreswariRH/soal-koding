<?php
// SOAL:
// Anda memiliki daftar bilangan bulat, dan untuk setiap indeks Anda ingin menemukan produk dari setiap bilangan bulat kecuali bilangan bulat pada indeks itu. 
// Tulis fungsi get_products () yang mengambil daftar bilangan bulat dan mengembalikan daftar produk.

// array:
// [1, 7, 3, 4]

// hasilnya:
// [84, 12, 28, 21]

// dengan cara hitung:
// [7 * 3 * 4, 1 * 3 * 4, 1 * 7 * 4, 1 * 7 * 3]




// JAWABAN:

// asumsi saya, saya harus menghasilkan output berupa kumpulan nilai yang isinya perkalian antar elemen kecuali indeks yang sedang aktif.


function get_products()
{
   $arr = [1, 7, 3, 4];
   $index = 0;

   // for untuk index-nya
   for ($index = 0; $index < count($arr); $index++) {

      // nilai variabel perkalian di reset lagi jadi 1
      $perkalian = 1;

      // for untuk ngitung tiap elemen (yang kalo bukan index yang sedang aktif)
      for ($i = 0; $i < count($arr); $i++) {
         if ($i == $index) {
            continue;
         }
         $perkalian *= $arr[$i];
      }

      echo $perkalian . " ";
   }
}
