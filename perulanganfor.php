<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan For</title>
    <style>
    .warna-baris{
        background-color : silver;
    }
    </style>
</head>
<body>
   <!--<table border="1" cellpadding="10" cellspacing="0">
    /* cara pertama */
    <?php
    /*for ($i=1; $i <= 3; $i++) { 
        echo "<tr>";
        for ($j=1; $j <= 5; $j++) { 
            echo "<td> $i, $j </td>";
        }
        echo "</tr>";
    }*/
    
    ?>
    </table>-->

    <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i=1; $i <=5 ; $i++) : ?> 
        <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
        <?php for ($j=1; $j <=5 ; $j++) : ?> 
            <td><?php echo "$i, $j"; ?> </td>
            <!-- Jika hanya ingin menampilkan variable, bisa menggunakan syntax
            seperti di bawah ini -->
            <?php/*= "$i, $j"*/?>
        <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>