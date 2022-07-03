<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS\style.css">
</head>
<body>
    <style type="text/css">
        body {
            background-image: url("bg1.jpg");
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
            $hasil=0;
            $hasil = ($perolehan-$residu)/$umur;  
        }
    ?>
        <form class="topBefore" action="SL.php" method="get">
            <h1><b><center>NILAI DEPRESIASI <font color="257ED">METODE STRIGHT LINE</font></center></b></h1>
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
                        <td><input type="text" name="umur" value="<?php echo $umur; ?>"  required></td>
                    </tr>
                    <tr>
                        <td><button type="button" onclick="location.href='index.php'">Back</button></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Hitung</button></td>
                    </tr>
                </table><br>
                <?php
                    if (isset($_GET['perolehan'])) {
                        $hasil = "Nilai depresiasi pertahunnya selama ". $umur . " tahun, <br> berdasarkan metode Straight Line adalah " .number_format($hasil,0,',','.');
                        echo "<h2>$hasil</h2>" ;
                    }
                ?>
            </form>

</body>
</html>