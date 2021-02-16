<?php
include 'connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="industri_files/css3menu1/style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Menu Admin</title>
<style type="text/css">
<!--
body {
    background-image: url();
    background-color: #FFFFFF;
}
.style21 {
    color: #FFFFFF;
    font-family: "Maiandra GD";
    font-size: 14px;
}
.style25 {color: #EEEEEE}
body,td,th {
    font-family: Arial, Helvetica, sans-serif;
}
.style43 {
    font-size: 24px}
.style44 {
    font-size: 14px;
    font-weight: bold;
    color: #FF6600;
}
.style45 {color: #FF0000;
    font-weight: bold;
    font-size: 18px;
}
.style46 {color: #FFFFFF}
-->
</style>
</head>
 
<body>
<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#009900">
  <tr>
    <th width="992" height="70" align="left" bordercolor="#FFFFFF" bgcolor="#006600" scope="col"><blockquote>
      <p align="center" class="style25 style43">Project CRUD </p>
    </blockquote></th>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"> </td>
  </tr>
  <tr>
    <td height="19"><table width="534" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td><span class="style44"><a href="index.php">Menu Utama</a> | <a href="input.php">Input Data</a> | <a href="view.php">Tampil Data</a> </span> </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="0" align="left"></p>
      <div align="center" class="style45">Lihat Biodata</div>
      <p><table width="1000" border="1" align="center" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th height="26" bordercolor="#006600" bgcolor="#009900"><span class="style46">No</span></th>
            <th bordercolor="#006600" bgcolor="#009900"><span class="style46">Nama</span></th>
            <th bordercolor="#006600" bgcolor="#009900"><span class="style46">Jenis Kelamin</span></th>
            <th bordercolor="#006600" bgcolor="#009900"><span class="style46">Alamat</span></th>
            <th bordercolor="#006600" bgcolor="#009900"><span class="style46">No Hp</span></th>
            <th bordercolor="#006600" bgcolor="#009900"><span class="style46">Pilihan</span></th>
        </tr>
    </thead>
   
    <tbody>
    <?php
    $sql = "SELECT * FROM tabel_biodata ORDER BY id";
    $no  = 1;
    foreach ($dbh->query($sql) as $data) :
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['jenis_kelamin'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['no_hp'] ?></td>
            <td align="center">
                <a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a>
                &nbsp;|&nbsp;
                <a href="hapus.php?id=<?php echo $data['id'] ?>" onClick="return confirm('Anda yakin akan menghapus data?')">Delete</a>            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
      <br />
<center>
    <p><a href="index.php">Home</a></p>
  </center></td>
  </tr>
 
 
  <tr>
    <td height="29" align="center" valign="middle" bgcolor="#006600"><span class="style21">Created By: @ariantaps</span></td>
  </tr>
</table>
</body>
</html>