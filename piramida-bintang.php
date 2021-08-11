<?php
// SOAL:
// Buat piramida 1
// *
// **
// ***
// ****
// *****

// Buat piramida 2
// *****
//  ****
//   ***
//    **
//     *

// Buat piramida 3
// *****
// ****
// ***
// **
// *

// Buat piramida 4
//     *
//    **
//   ***
//  ****
// *****



// JAWABAN:

// piramida 1
for ($baris = 1; $baris <= 5; $baris++) {
   for ($kolom = 1; $kolom <= $baris; $kolom++) {
      echo "*";
   }
   echo "<br>";
}

echo "<br>";
echo "<br>";

// ==========================================================================

// piramida 2
for ($baris = 1; $baris <= 5; $baris++) {
   for ($spasi = 1; $spasi <= $baris; $spasi++) {
      echo " &nbsp";
   }
   for ($kolom = 5; $kolom >= $baris; $kolom--) {
      echo "*";
   }
   echo "<br>";
}

echo "<br>";
echo "<br>";

// ============================================================================

// piramida 3
for ($baris = 5; $baris >= 1; $baris--) {

   for ($kolom = 1; $kolom <= $baris; $kolom++) {
      echo "*";
   }
   echo "<br>";
}

echo "<br>";
echo "<br>";

// ==============================================================================

// piramida 4
for ($baris = 5; $baris > 0; $baris--) {
   for ($spasi = 1; $spasi <= $baris; $spasi++) {
      echo " &nbsp";
   }
   for ($kolom = 5; $kolom >= $baris; $kolom--) {
      echo "*";
   }
   echo "<br>";
}
