<?php

// Misalkan kita dapat mengakses harga saham apple sebagai list/array, dimana:
// • index array sebagai waktu dalam menit setelah jam perdagangan saham dimulai.
// • Nilai dalam elemen tersebut merupakan harga saham pada saat itu.

// Maka:

// cost $300 at 09:30am, stock_prices_yesterday[0] = 300
// cost $350 at 09:40am, stock_prices_yesterday[10] = 350
// cost $500 at 10:30am, stock_prices_yesterday[60] = 500

// Buatkan fungsi yang mengambil stock_prices_yesterday dan mengembalikan keuntungan terbaik yang bisa saya buat
// dari 1 pembelian dan 1 penjualan 1 saham Apple kemarin.

// contohnya:

// harga = [10, 7, 5, 8, 11, 9, 1]
// selisih(harga)
// # returns 6 (5 dan 11)


// deklarasikan array
$harga = [10, 7, 5, 8, 11, 9, 1];

// deklarasikan dan definisikan variabel.
// variabel terendah untuk menyimpan elemen array terkecil
// variabel tertinggi untuk menyimpan elemen array terbesar
// variabel selisih untuk menyimpan selisih dari nilai elemen array terbesar dan terkecil, sehingga memberikan selisih paling menguntungkan (selisih terbesar).
$terendah = 0;
$tertinggi = 0;
$selisih = 0;


// iterasi untuk elemen array awal (posisi elemen di depan)
for ($i = 0; $i < count($harga); $i++) {
   // iterasi untuk elemen array yang mengikuti elemen array awal (posisi elemen n+1 elemen awal array)
   for ($j = $i + 1; $j < count($harga); $j++) {

      // 
      if ($harga[$j] > $harga[$i]) {

         if ($selisih < $harga[$j] - $harga[$i]) {
            $selisih = $harga[$i] - $harga[$j];
            $terendah = $harga[$j];
            $tertinggi = $harga[$i];
         }
      }
   }
}

echo "selisih : $selisih, dari angka terbesar $tertinggi dan angka terendah $terendah";
