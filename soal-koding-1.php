<?php
// Buatlah fungsi yang dapat menghasilkan output seperti dibawah ini:

// input n = 5
// 1**45678
// 12**5678
// 123**678
// 1234**78
// 12345**8

// input n = 4
// 1**4567
// 12**567
// 123**67
// 1234**7

function input($jumlahInput)
{

   for ($i = 1; $i <= $jumlahInput; $i++) {
      for ($j = 1; $j <= $jumlahInput + 3; $j++) {
         if ($j == $i + 1 || $j == $i + 2) {
            echo "*";
         } else {
            echo $j . " ";
         }
      }
      echo "<br>";
   }
}

echo input(5);
// echo input(4);
