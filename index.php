<!DOCTYPE html>
<html>
<head>
<Title> Klinik Kesehatan </Title>
</head>
<body background = "Data dokter.jpg"></body>
<font color="white">
<center><h1>DATA DOKTER</h1></center></font>
<br>
<br> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table border="1" align="center" width="80%" bgcolor="white">
    <tr bg="white">
<th>Nama Dokter</th>
<th>ID Dokter</th>
<th>Tempat dan Tanggal Lahir</th>
<th>Spesialis Medis</th>
<th>No Telepon</th>
<th>Jadwal Dokter</th>
</tr>
<tr>
    <?php
    include "koneksi.php";
    $tampil = mysqli_query($konek, "select * from datadokter");
    while ($data = mysqli_fetch_array($tampil)){
        ?>
        <td><?php echo $data ['namadokter'];?></td>
        <td><?php echo $data ['iddokter']; ?></td>
        <td><?php echo $data ['tempatdantanggallahir']; ?></td>
        <td><?php echo $data ['jenisspesialismedisdokter']; ?></td>
        <td><?php echo $data ['nomortelepon']; ?></td>
        <td><?php echo $data ['jadwalkerjadokter']; ?></td>
      </tr>
      <?php
    }
    ?>
</table>
</body>
</html>