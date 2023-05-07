<?php
// Koneksi ke database
require_once 'koneksi.php';

// Ambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

// Query untuk menambah data
$query = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
