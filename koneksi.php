<?php
$conn= mysqli_connect (
    "localhost",
    "root",
    "",
    "new_coding"
    );
if(!$conn){
    die("koneksi ke database gagal".mysqli_connect_error());
}
?>