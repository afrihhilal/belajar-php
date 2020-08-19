<?php
/* PENGKONDISIAN
1. if else
2. if else if 
3. ternary
4. switch
*/

# 1. if 
/** Jika menggunakan 'if' saja, maka baris setelah blok 
* 'if() {}' akan tetap dijalankan walaupun kondisi di dalam
* blok 'if() {}' bernilai benar atau salah. */
/* Code Program 
$x = 50;
if ($x < 20) {
    echo "benar";
}
echo "salah";
*/

# 2. if else
/** Jika menggunakan 'if() {} else {}' maka kondisi benar akan
* dijalankan pada salah satu blok 'if' atau 'else' saja. 
*     |kondisi|       
*         |
*  |benar| |salah|
*      |     |
*         |
* [benar] atau [salah] */

/* Code Program
$x = 50;
if ($x < 20) {
    echo "benar";
} else {
    echo "salah";
}
*/

# 3. if () {} elseif () {} else () {}
/** Kondisi ini digunakan untuk membuat lebih dari dua pilihan
* benar atau salah, atau dengan kata lain ada kondisi berbeda 
* selain kondisi if dan else. Analoginya seperti mencocokan
* tiga pilihan atau lebih */
/* Code Program */

 $x = 20;
if ($x < 20) {
    echo "benar";
} elseif ($x == 20) {
    echo "Tepat Sekali";
} else {
    echo "salah";
}

/** Contoh penerapan kondisi di atas bisa digunakan untuk 
* membuat warna yang beda pada tiap baris pada 'perulanganfor' */
?>