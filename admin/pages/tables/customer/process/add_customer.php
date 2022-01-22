<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $id        = $_POST['id'];
    $project_nama      = $_POST['project_nama'];
    $client        = $_POST['client'];
    $project_leader      = $_POST['project_leader'];
    $start_date      = $_POST['start_date'];
    $end_date      = $_POST['end_date'];
    $progress      = $_POST['progress'];

    $query = "INSERT INTO customer VALUES ('$id','$project_nama','$client','$project_leader','$start_date','$end_date','$progress',0)";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_customer.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil ditambahkan");
        header("Location:../table_customer.php?error=$error");
    }

    mysqli_close($con);
?>