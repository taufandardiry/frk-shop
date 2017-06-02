<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<style type="text/css">

table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}
</style>
<body>
	<table style="width: 100%;">
		<thead>
			<td></td>
			<td>Kode Barang</td>
			<td>Nama Barang</td>
			<td>Jenis</td>
			<td>Satuan</td>
			<td>Jumlah</td>
			<td>Harga</td>
			<td>Image</td>
		</thead>
		<tbody>
			<form method="post" action="<?php echo site_url().'/MyControllerData/delete_barang'?>"> 
			<?php foreach ($data as $x) { ?>
			<tr>
			<td><input type="checkbox" name="barang[]" value="<?php echo $x['kode_barang']?>"></td>
			<td><?= $x['kode_barang'] ?></td>
			<td><?= $x['nama_barang'] ?></td>
			<td><?= $x['jenis'] ?></td>
			<td><?= $x['satuan'] ?></td>
			<td><?= $x['jumlah'] ?></td>
			<td><?= $x['harga'] ?></td>
			<td style="width:10px, height:10px;"><img src="<?php echo base_url().'/upload/'. $x['image']; ?>" ></td>
			</tr>
			<?php } ?>
		</tbody>
		</table>
		<br>
		<input type="submit" value="Delete"></form>
	<a href="<?= base_url() ?>"><button>Back</button></a>
</body>
</html>