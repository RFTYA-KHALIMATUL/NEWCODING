<?php
include 'koneksi.php';
$data= mysqli_query($conn, "SELECT * FROM kategori");
$no= 1;
?>
<h2>Data Kategori</h2>
<table border=1; cellpadding="10">
    <a href="tambah.php">Tambah kategori</a>
    <tr>
        <th>No</th>
        <th>id kategori</th>
        <th>kategori</th>
    </tr>
<?php while ($row= mysqli_fetch_assoc($data)):?>
    <tr>
        <td><?=$no++;?></td>
        <td><?=(int)$row['id_kategori'];?></td>
        <td><?=htmlspecialchars($row ['kategori']);?></td>
    </tr>
    <?php endwhile;?>
</table>
