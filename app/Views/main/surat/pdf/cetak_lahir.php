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

	</center>

	<center>
		<h4>
			<u>SURAT KETARANGAN KELAHIRAN</u>
		</h4>
		<h4>No Surat : 0<?php echo $ininomor; ?>/Ket.Kelahiran/<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Desa Gereneng, Kecamatan Sakra Timur, Kabupaten Lombok Timur, dengan ini menerangkan
		bahawa :</P>
	<table>
		<tbody>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $data['jekel']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
		</tbody>
	</table>
	<p>Telah benar-benar Lahir di Desa Gereneng, Kecamatan Sakra Timur, Kabupuaten Lombok Timur</P>
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