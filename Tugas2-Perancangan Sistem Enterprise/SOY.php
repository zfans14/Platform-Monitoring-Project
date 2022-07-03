<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS\style.css">
</head>
<body>
    <style type="text/css">
        body {
            background-image: url("bg3.jpg");
            background-size: cover;
        }
    </style>
    <?php
        $perolehan=null;
        $residu=null;
        $umur=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $jml_umur = 0;
            for ($i=1; $i<=$umur ; $i++) { 
                $jml_umur = $jml_umur + $i;
            }
            $hasil = ($perolehan - $residu) * $umur / $jml_umur;    
        }
    ?>
        <form class="topBefore" action="SOY.php" method="get">
            <h1><b><center>NILAI DEPRESIASI <font color="257ED">METODE SUM OF YEAR</font></center></b></h1>
            <table align="center" border="0">
                <tr>
                    <td>Harga Perolehan</td>
                    <td>:</td>
                    <td><input type="text" name="perolehan" value="<?php echo $perolehan; ?>" required></td>
                </tr>
                <tr>
                    <td>Nilai Residu</td>
                    <td>:</td>
                    <td><input type="text" name="residu" value="<?php echo $residu; ?>"  required></td>
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
                </tr>
        </table>
        <br>
        <?php
        if (isset($_GET['perolehan'])) {
            $hasil = "Nilai depresiasi berdasarkan metode Sum of The Year <br> pada tahun ke-" . $umur . " adalah " .number_format($hasil,0,',',);
            echo "<h2>$hasil</h2>" ;
        }
        ?>
        </form>
</body>
</html>