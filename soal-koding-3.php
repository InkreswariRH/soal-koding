<?php
// SOAL:
// Untuk memenangkan hadiah untuk penjualan kue yang paling banyak terjual, teman saya Alice dan saya akan menggabungkan "Girl Scout Cookies" menjadi 1 pesanan.

// Setiap pesanan diwakili oleh "nomor pesanan" (bilangan bulat).

// Kami memiliki daftar pesanan yang sudah diurutkan secara numerik, dalam daftar. buatlah fungsi untuk menggabungkan daftar pesanan kami menjadi 1 pesanan yang terurut.

// Jangan gunakan fungsi array yang telah ditentukan untuk menggabungkan dan mengurutkan (array_merge, array_sort, .sort (),
// .merge () atau fungsi serupa lainnya)

// bob = [3, 4, 6, 10, 11, 15]
// alice = [1, 5, 8, 12, 14, 19]
// print merge_list(bob, alice)
// # prints [1, 3, 4, 5, 6, 8, 10, 11, 12, 14, 15, 19]



// JAWABAN:

// definisikan 2 array soalnya (bob dan alice)
$bob = [3, 4, 6, 10, 11, 15];
$alice = [1, 5, 8, 12, 14, 19];

// bikin iterasi untuk menggabungkan nilai array, biar jadi 1 array saja. Ingat di soal kita tidak boleh menggunakan fitur bawaan dari bahasa pemrograman yang kita buat.
// Bisa saja saya menggunakan merge_array, tapi itu berarti saya tidak mengikuti perintah soal...
for ($i = 0; $i < count($bob); $i++) {
   $alice[] = $bob[$i];
}

// menaruh gabungan 2 array sebelumnya (bob dan alice) ke sebuah array baru bernama gabung.
for ($i = 0; $i < count($alice); $i++) {
   $gabung[] = $alice[$i];
}

// sekarang tinggal mengurutkan elemen array. Disini bisa menggunakan algoritma pengurutan apapun. Tetapi, disini saya akan menggunakan algoritma pengurutan bubble sort.
for ($j = 0; $j < count($gabung); $j++) {
   echo "iterasi ke- " . $j + 1 . "<br>";
   for ($i = 0; $i < count($gabung) - 1; $i++) {
      if ($gabung[$i] > $gabung[$i + 1]) {
         $temp = $gabung[$i + 1];
         $gabung[$i + 1] = $gabung[$i];
         $gabung[$i] = $temp;
      }

      // ini iterasi untuk nampilin progress proses aja (nampilin output tiap proses iterasi), tanpa baris kode for ini juga bener bener aja.
      for ($x = 0; $x < count($gabung); $x++) {
         echo $gabung[$x] . " ";
      }
      echo "<br>";
   }
   echo "<br>";
}
