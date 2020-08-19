<?php
$link = new mysqli("db", "root", "hilal123", "sample");
//var_dump($link);

if ($link->connect_error) {
    die("koneksi gagal : " . $link->connect_error);
}else{
    echo "Koneksi berhasil <br>";
}

$sql = "SELECT CUST_CODE, CUST_NAME FROM customer ORDER BY rand() LIMIT 5;";
$result = $link->query($sql);
$no = 1;
//$sempak = $result->fetch_assoc();
//$kata = $sempak['CUST_NAME'];
//$last = substr($kata, -1);
//echo $last;
//var_dump($result->fetch_assoc());
echo "<br>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        //var_dump($row);
        echo "Nomer Urut : " .$no. "| Kode Customer : " .$row["CUST_CODE"]. "| Nama Customer : " . 
        $row["CUST_NAME"] . "<br>";
        $no ++;
    }
}else{
    echo "data tidak ada";
}

?>