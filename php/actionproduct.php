<?php
// Koneksi ke database
require_once 'koneksi.php';

// Ambil data dari form
$id_category = $_POST['id_category'];
$name = $_POST['name_product'];
$desc = $_POST['deskripsi'];
$price = $_POST['harga'];
$status = $_POST['status'];
$create = $_POST['create'];
$verify = $_POST['verify'];


// Query untuk menambah data
$query = "INSERT INTO products (category_id, name, description, price, status, created_by, verified_by) VALUES ('$id_category', '$name', '$desc', '$price', '$status', '$create', '$verify')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>