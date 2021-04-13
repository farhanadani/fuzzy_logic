<?php
require 'koneksi.php';
$ambil = mysqli_query($conn, "DELETE FROM tbl_rule WHERE id_rule='" . $_GET["id_rule"] . "'");

echo "<script>alert('Rule Terhapus');</script>";
echo "<script>location='input_rule.php';</script>";
