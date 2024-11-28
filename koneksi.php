<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kampus";

$conn = new mysql($host, $username, $password, $dbname);

if ($conn>connect_error) {
    die("koneksi gagal: " . $conn>connect_error);

}