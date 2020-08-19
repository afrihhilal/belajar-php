<?php
/** Date / Time
* 1. date()
* 2. time()
* 3. mktime()
* 4. strtotime()
*/

/** date() 
* Fungsi untuk menampilkan tanggal dengan format
* Hari, tanggal-Bulan-Tahun */
/* echo date("l, d-M-Y"); */

/** time()
* fungsi yang digunakan untuk menampilkan jumlah detik dari
* tanggal 1 januari 1970 sampai saat ini. Fungsi ini juga disebut dengan 
* UNIX time atau EPOCH */
/* echo time(); */

/** contoh menghitung 100 hari ke depan atau ke belakang 
* dengan fungsi date() dan time() */
/* echo date("d M Y", time()-60*60*24*100);*/

/** mktime()
* cek tanggal lahir menggunakan fungsi 'mktime()' dan
* 'date()' . mktime() digunakan untuk menghitung jumlah
* detik yang telah berlalu dari tanggal 1 januari 1970
* sampai dengan waktu yang kita tetapkan.
* parameter yang digunakan pada mktime(0,0,0,0,0,0) adalah
* (jam, menit, detik, bulan, tanggal, tahun) */
/* echo date("l", mktime(0,0,0,1,6,1992)); */

/** strtotime()
* fungsi yang digunakan untuk mengubah string menjadi format
* detik yang telah berlalu dari tanggal 1 Januari 1970.
* Format ini bisa juga digunakan untuk mengecek hari
* kelahiran kita dengan perintah sebagai berikut :*/
echo date("l",strtotime("1 June 1992"));

?>