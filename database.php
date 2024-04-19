<?php
$servername = "localhost";
$username = "ROOT";
$password = "";
$database = "test";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari database
$sql = "SELECT * FROM akun";
$result = $conn->query($sql);

?>