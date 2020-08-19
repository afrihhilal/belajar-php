<?php
/* PERULANGAN
1. for
2. while
3. do ... while
4. foreach : pengulangan array
*/

# cara menulis 'for'
// for ($i=1; $i < 5 ; $i++) { 
//     echo $i . "<br>";
// }
# ------ 'for' ------

# cara menulis 'while'
// $a = 0;
// while ($a < 10) {
//     echo "Hello World! <br>";
//     $a++;
// }
# ------ 'while' -----

# cara menulis 'do ... while'
/* Perbedaannya dengan while adalah
ketika kondisi 'false' maka 'do .. while'
akan mengeksekusi perintah satu kali.
Berbeda dengan 'while', hanya akan mengeksekusi
perintah jika bernilai 'true' */
$a = 20;
do {
    echo "Hello World <br>";
    $a++;
} while ($a <= 10);

# cara menulis 'do ... while'


?>