<a href="admin_add_penulis.php" class="btn btn-xs btn-primary"> Tambah Penulis</a>
<p align="center">
<div class="col-lg-6">
<div class="table-responsive">
<table class="table table-hover table-striped">
	<tr><th>ID Penulis</th><th>Nama Penulis</th><th>Alamat</th><th>Np. Telepon</th><th>Action</th></tr>
    <?php
	include "../class.php";
	$row=$obj->select("penulis");
	for($i=0; $i<sizeof($row); $i++){
		echo "<tr><td> ".$row[$i]['id_penulis']." </td><td> ".$row[$i]['nama_penulis']." </td><td> ".$row[$i]['alamat']." </td><td> ".$row[$i]['telp']." </td><td><a href='admin_edit_penulis.php?id=".$row[$i]['id_penulis']."'class='btn btn-xs btn-success'>Edit</a> | <a ";?>onclick="return confirm('Apakah anda yakin ingin mengahapus penulis <?php echo $row[$i]['nama_penulis'];?>')" <?php echo " href='../proses.php?act=hapus_penulis&id=".$row[$i]['id_penulis']."' class='btn btn-xs btn-success'>Hapus</a></td></tr>";
	}

	?>
</table>
</div>
</div>
</p>
