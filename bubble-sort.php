<?php

// ini adalah contoh teknik pengurutan bubble sort

// bubble sort adalah teknik pengurutan yang membandingkan elemen N dengan elemen N+1 dan akan terus dilanjutkan hingga mencapai batas jumlah elemen dalam sebuah array.

// contoh teknik pengurutannya:

// terdapat urutan angka 3,2,5,4,7
// kita akan sebut juga urutan indexnya agar jelas. 0 1 2 3 4

// Langkah 1: bubble sort akan membandingkan antara angka 3 yang ada di index 0 dengan angka 2 di index 1. Ternyata index 0 (angka 3), lebih besar dari index 1 (angka 2). Maka kita akan tukar, menjadi:

// 2,3,5,4,7

// Langkah 2: bubble sort akan membandingkan antara angka 3 yang ada di index 1 dengan angka 5 di index 2. Ternyata index 1 (angka 3), lebih kecil dari index 2 (angka 5). Maka kita tidak akan tukar, menjadi:

// 2,3,5,4,7

// Langkah 3: bubble sort akan membandingkan antara angka 5 yang ada di index 2 dengan angka 4 di index 3. Ternyata index 2 (angka 5), lebih besar dari index 3 (angka 4). Maka kita akan tukar, menjadi:

// 2,3,4,5,7

// Langkah 4: bubble sort akan membandingkan antara angka 5 yang ada di index 3 dengan angka 7 di index 4. Ternyata index 3 (angka 5), lebih kecil dari index 4 (angka 7). Maka kita tidak akan tukar, menjadi:

// 2,3,4,5,7

// Langkah 5: proses akan berlanjut ke index 0 lagi, dan elemen akan dibandingkan kembali satu per satu. Tapi yang perlu diperhatikan, index elemen yang dibandingkan akan terus ditambah 1.


// contoh source code:

// array yang mau diurutkan
$urutkanDong = [3, 7, 1, 8, 2, 9, 4];

// for pertama ini gunanya agar terjadi iterasi berulang, hingga seluruh elemen terurut dengan benar. 
// Jika for ini tidak ada, maka elemen array hanya akan terurut sekali (sesuai dengan jumlah elemen array). Jadi belum benar benar terurut tapi udah diakhiri.
for ($j = 0; $j < count($urutkanDong); $j++) {
   echo "iterasi ke " . $j + 1 . "<br>";

   // for ini gunanya untuk membandingkan tiap elemen array
   for ($i = 0; $i < count($urutkanDong) - 1; $i++) {
      if ($urutkanDong[$i] > $urutkanDong[$i + 1]) {
         $temp = $urutkanDong[$i + 1];
         $urutkanDong[$i + 1] = $urutkanDong[$i];
         $urutkanDong[$i] = $temp;
      }

      for ($x = 0; $x < count($urutkanDong); $x++) {
         echo $urutkanDong[$x] . " ";
      }
      echo "<br>";
   }
   echo "<br>";
}
