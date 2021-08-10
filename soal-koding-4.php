<?php

// Cari nilai terendah dan tertinggi dari kumpulan array berikut:
// array = [23, 21, 13, 9, 7, 56];

// deklarasikan array
$arr = [23, 21, 13, 9, 7, 56];

// deklarasikan dan definisikan variabel
// terdapat 2 variabel, variabel besar untuk menyimpan nilai terbesar array dan variabel rendah untuk menyimpan nilai array terkecil
$besar = 0;
$rendah = 0;

// lakukan iterasi untuk membaca nilai elemen array satu per satu
for ($i = 0; $i < count($arr); $i++) {
   if ($arr[0] < $arr[$i]) {
      $besar = $arr[$i];
   }

   if ($arr[0] > $arr[$i]) {
      $rendah = $arr[$i];
   }
}

echo "nilai terendah $rendah";
echo "<br>";
echo "nilai tertinggi $besar";
