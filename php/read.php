<html>
    <head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  
  
    </head>
    <body>


<?php
// Koneksi ke database
require_once 'koneksi.php';
// include "koneksi.php";

// Query untuk menampilkan data
$query = "select a.id, b.name as nama_category, a.name as nama_products, a.description , a.price, a.status, a.created_at, a.updated_at, created_by, a.verified_at, verified_by
from products a inner join categories b on a.category_id = b.id
order by a.id";

// Eksekusi query
$result = mysqli_query($conn, $query);
?>
 <!-- Tampilkan data -->


<table id="myTable">
<thead>
    <th>ID</th>
    <th>NAMA</th>
    <th>NAMA PRODUCT</th>
    <th>DESKRIPSI</th>
    <th>HARGA</th>
    <th>STATUS</th>
    <th>CREATED AT</th>
    <th>UPDATED AT</th>
    <th>CREATED BY</th>
    <th>VERIFIED AT</th>
    <th>VERIFIED BY</th>
</thead>
<tbody>
    <?php  
while ($row = mysqli_fetch_assoc($result)) : //mysqli_fetch_assoc
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama_category'] ?></td>
        <td><?= $row['nama_products'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['price'] ?></td>
        <td><?= $row['status'] ?></td>
        <td><?= $row['created_at'] ?></td>
        <td><?= $row['updated_at'] ?></td>
        <td><?= $row['created_by'] ?></td>
        <td><?= $row['verified_at'] ?></td>
        <td><?= $row['verified_by'] ?></td>
    </tr>
    
<?php endwhile; ?>

</tbody>

</table>




 <!-- Tutup koneksi -->
 <?php
mysqli_close($conn);
?>


</body>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>


