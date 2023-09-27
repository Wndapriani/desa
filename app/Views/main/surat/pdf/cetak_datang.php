<?php


$tanggal = date("m/y");
$tgl = date("d/m/y");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
</head>

<body>
	<center>

		<h2>PEMERINTAH KABUPATEN LOMBOK TIMUR</h2>
		<h3>KECAMATAN SAKRA TIMUR
			<br>DESA GERENENG
		</h3>
		<p>________________________________________________________________________</p>

		<?php
		// $sql_tampil = "select * from tb_datang
		// 	where id_datang ='$id'";

		// $query_tampil = mysqli_query($koneksi, $sql_tampil);
		// $no = 1;
		// while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>SURAT KETARANGAN PENDATANG</u>
		</h4>
		<h4>No Surat :
			<?php echo $data[0]['id_datang']; ?>/Ket.Pendatang/
			<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Desa Gereneng, Kecamatan Sakra Timur, Kabupaten Lombok Timur, dengan ini menerangkan
		bahawa :</P>
	<table>
		<tbody>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $data[0]['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data[0]['nama_datang']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $data[0]['jekel']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Datang</td>
				<td>:</td>
				<td>
					<?php echo $data[0]['tgl_datang']; ?>
				</td>
			</tr>
		</tbody>
	</table>
	<p>Benar-benar Telah datang dan berencana untuk tinggal di Desa Gereneng, Kecamatan Sakra Timur, Kabupuaten Lombok Timur.</P>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagaimana mestinya.</P>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="right">
		Gereneng,
		<?php echo $tgl; ?>
		<br> KEPALA DESA GERENENG
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>(BUDI HARLIN)
	</p>


	<script>
		window.print();
	</script>

</body>

</html>