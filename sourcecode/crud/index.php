<title>Data Siswa</title>
<style>
    table{
        border-collapse:collapse;
    }
    th, td{
        border: 1px solid black;
        padding:10px;
        text-align:center;
    }
    th{
        background:#ccc;
    }
    a{
        text-decoration:none;
    }
</style>

<h2>Data Siswa</h2>
<p><a href="tambah.php"> Tambah Siswa </a></p>
<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php
include "config.php";
$query = "SELECT * FROM siswa";
$result = mysqli_query($koneksi, $query);

$no=1;
while($data = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?=$no?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['kelas']?></td>
            <td><?=$data['jurusan']?></td>
            <td>
                <a href="edit.php?id=<?=$data['id']?>"> Edit </a> | 
                <a href="hapus.php?id=<?=$data['id']?>"> Hapus </a>
            </td>
        </tr>
<?php
$no++;
}
?>
    </tbody>
</table>