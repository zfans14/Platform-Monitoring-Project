<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS\style.css">
</head>
<body>
    <style type="text/css">
        body {
            background-image: url("bg2.jpg");
            background-size: cover;
        }
    </style>
    <?php
        $perolehan=null;
        $residu=null;
        $umur=null;
    ?>
        <form class="topBefore" action="RB.php" method="get">
            <h1><b><center>NILAI DEPRESIASI <font color="257ED">METODE REDUCE BALANCE</font></center></b></h1>
            <table align="center"  border="0">
                <tr>
                    <td>Harga Perolehan</td>
                    <td>:</td>
                    <td> <input type="text" name="perolehan" value="<?php echo $perolehan; ?>" required></td>
                </tr>
                <tr>
                    <td>Umur Ekonomis (Tahun)</td>
                    <td>:</td>
                    <td> <input type="text" name="umur" value="<?php echo $umur; ?>"  required></td>
                </tr>
                <tr>
                    <td><button type="button" onclick="location.href='index.php'">Back</button></td>
                </tr>
                <tr>
                    <td><button type="submit" >Hitung</button></td>
        </table>
        <br>
        <?php
            if (isset($_GET['perolehan'])) {
                $perolehan=$_GET['perolehan'];
                $umur=$_GET['umur'];
                $hasil = ($perolehan / $umur) * 2;
                $hasila = "Nilai depresiasi berdasarkan metode Reducing Balance pada tahun pertama adalah " .number_format($hasil,0,',','.');
                echo "<h2>$hasila</h2>";
                for ($i=2; $i <= $umur; $i++) { 
                    $hasill = (($perolehan-$hasil) / $umur) * 2;
                    $hasilla = "Nilai depresiasi berdasarkan metode Reducing Balance pada tahun ke-" .$i. " adalah " .number_format($hasill,0,',','.');
                    echo "<h2>$hasilla</h2>";
                    $perolehan = $perolehan - $hasill;
                    $hasill = ($perolehan/$umur)*2;
                }
            }
        ?>
        </form>
</body>
</html>