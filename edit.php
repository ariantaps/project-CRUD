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
-->
</style>
</head>
 
<body>
<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#009900">
  <tr>
    <th width="992" height="70" align="left" bordercolor="#FFFFFF" bgcolor="#006600" scope="col"><blockquote>
      <p align="center" class="style25 style43">SISTEM INFORMASI CRUD SEDERHANA </p>
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
    <td height="0" align="left"><p><?php
include 'connect.php';
if (isset($_GET['id'])) {
    $query = $dbh->query("SELECT * FROM tabel_biodata WHERE id = '$_GET[id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}
 
if ($data === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}
?>
</p>
    <div align="center" class="style45">Edit Biodata </div>
    <fieldset style="width: 50%; margin: auto;">
    <legend>Form Edit Biodata</legend>
   
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
        <p>
            Nama Lengkap<br />
            <input type="text" name="nama" required value="<?php echo $data['nama']; ?>"/>
        </p>
       
        <p>
            Jenis Kelamin<br />
            <?php if ($data['jenis_kelamin'] === "Laki-Laki") : ?>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" checked /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
            <?php else : ?>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" checked /><label for="perempuan">Perempuan</label>
            <?php endif; ?>
        </p>
       
        <p>
            Alamat Lengkap<br />
            <textarea name="alamat" cols="50" required><?php echo $data['alamat']; ?></textarea>
        </p>
       
        <p>
            Nomor Handphone<br />
            <input type="text" name="no_hp" required value="<?php echo $data['no_hp']; ?>" />
        </p>
       
        <p>
            <input type="submit" value="Update" />
            <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
</fieldset>
<br />
<center>
    <p><a href="index.php">Home</a></p>
  </center></td>
  </tr>
 
  <tr>
    <td height="29" align="center" valign="middle" bgcolor="#006600"><span class="style21">Created By:@ariantaps</span></td>
  </tr>
</table>
</body>
</html>