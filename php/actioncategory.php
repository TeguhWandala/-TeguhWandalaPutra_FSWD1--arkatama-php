<?php
// Koneksi ke database
require_once 'koneksi.php';

// Ambil data dari form
$name = $_POST['fname'];


// Query untuk menambah data
$query = "INSERT INTO categories (name) VALUES ('$name')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
