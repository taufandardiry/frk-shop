<!DOCTYPE html>
<html>
<head>
	<title>Form Barang</title>
</head>
<body>

	<?php echo form_open_multipart('MyControllerData/do_upload'); ?>
	<h2>INPUT BARANG</h2>
	<table>
		<tr>
			<td>Kode Barang</td>
			<td><input type="text" name="kode_barang" placeholder="kode barang"></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="nama_barang" placeholder="nama barang"></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td><input type="text" name="jenis" placeholder="jenis"></td>
		</tr>
		<tr>
			<td>Satuan</td>
			<td><input type="text" name="satuan" placeholder="satuan"></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="number" name="jumlah" placeholder="jumlah"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="number" name="harga" placeholder="harga"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="userfile" size="20"/></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
	
	<?php echo form_close(); ?>
	<br>
	__________________________________
	<h2>LIHAT DATABASE</h2>
	<a href="<?php echo site_url('read')  ?>"><button>Read</button></a>

</form>
</body>
</html>