<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS\style.css">
</head>
<body>
    <style type="text/css">
        body {
            background-image: url("bg4.jpg");
            background-size: cover;
        }
    </style>
    <?php
        $perolehan=null;
        $residu=null;
        $pemakaian = null;
        $kapasitas_max=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $pemakaian=$_GET['pemakaian'];
            $kapasitas_max=$_GET['kapasitas_max'];
            $hasil=0;
                    $hasil = ($perolehan - $residu) * ($pemakaian / $kapasitas_max);}
        
    ?>
        <form class="topBefore" action="UOA.php" method="get">
            <h1><b><center>NILAI DEPRESIASI <font color="257ED">METODE UNIT OF ACTIVITY</font></center></b></h1>
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
                        <td>Pemakaian</td>
                        <td>:</td>
                        <td> <input type="text" name="pemakaian" value="<?php echo $pemakaian; ?>"  required></td>
                    </tr>
                    <tr>
                        <td>Kapasitas Maksimal</td>
                        <td>:</td>
                        <td><input type="text" name="kapasitas_max" value="<?php echo $kapasitas_max; ?>"  required></td>
                    </tr>
                    <tr>
                        <td><button type="button" onclick="location.href='index.php'">Back</button></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Hitung</button></td>
                    </tr>
        </table>
        <br>
        <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Nilai depresiasi berdasarkan metode Unit of Activity adalah " .number_format($hasil,0,',','.');
                echo "<h2>$hasil</h2>" ;
            }
        ?>
        </form>
</body>
</html>