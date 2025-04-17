<?php
    $con = mysqli_connect("localhost","root","","ucapin");
    if(!$con){
        echo "<script>alert('Gagal tersambung dengan database.')</script>";
    }
?>