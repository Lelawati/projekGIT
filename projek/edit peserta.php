
<?php
require('config.php');
if(isset($_POST['update']))
{
	$id=$_POST['nama_peserta'];
	$email=$_POST['e-mail'];
	$no_tel=$_POST['no_tel'];
	$slot=$_POST['slot'];
	$result=mysqli_query($connect, "UPDATE pelajar SET nama_pelajar='".$nama."',
		kelas='".$no_phone."' ,
		yuran='".$slot."'
		WHERE nama_peserta='".$nama."'");
	echo "<script>alert('Kemaskini maklumat berjaya');
	window.location='index.php'</script>";
}
?>
<?php

$id=$_GET['nama_peserta'];
$result=mysqli_query($connect, "SELECT * FROM peserta WHERE nama_peserta=$nama");
while ($res=mysqli_fetch_array($result))
{
	$nama=$res['nama_peserta'];
	$email=$res['e-mail'];
	$no_phone=$res['no_phone'];
	$slot=$res['slot'];
}
?>

<html>
<head>
<title>KEMASKINI</title>
</head>
<body>
<center><h2>KEMASKINI REKOD</h2>
<fieldset>
<form name="form1" method="post" action="edit peserta.php">
<table border="0">
<tr>
<td>NAMA PESERTA</td>
<td><input type="text" readonly name="nama_peserta" 
value="<?php echo $nama;?>"></td>
</tr>
<tr>
<td>E-MAIL PESERTA</td>
<td><input type="text" name="e-mail" 
value="<?php echo $email;?>"></td>
</tr>
<tr>
<td>NO TEL</td>
<td><input type="text" name="no_tel"
value="<?php echo $no_phone;?>"></td>
</tr>
<tr>
<td>Slot</td>:<td> <select type="text" name=" Slot " required>
		<option value="Slot 1"> 24 JUN 2021 ,10 AM  </option>
    	<option value="Slot 2"> 30 JUN 2021 ,10 AM   </option>
    	<option value="Slot 3">  1 JULAI 2021 ,10 AM   </option>
    	
  		</select><br><br></td>

<tr>
<td><input type="submit" name="update" 
value="Update"></td>
</tr>
<tr>
<td><input type="hidden" name="nama" value="<?php echo $_GET['nama'];?>"></td>
</tr>
</table>
</form>
<a href="senarai peserta.php">Muka Depan</a>
</fieldset>
</center>
</body>
</html>