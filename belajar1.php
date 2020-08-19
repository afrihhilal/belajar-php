<html>
<?php
$a = "Hujan"; //global
$b = "kemarin";
function jajal()
{
    //coba fungsi
    global $a, $b;
    echo "<p>Variable x dalam fungsi ini adalah : $a $b </p>";
}
jajal();

//echo "<p>variable x diluar fungsi ini adalah : $a </p>";

?>

</html>