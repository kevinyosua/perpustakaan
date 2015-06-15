<a href="admin_add_penerbit.php" class="btn btn-xs btn-primary"> Tambah Penerbit</a>
<p align="center">
<div class="col-lg-6">
<div class="table-responsive">
<table class="table table-hover table-striped">
	<tr><th>ID Penerbit</th><th>Nama Penerbit</th><th>Alamat</th><th>Np. Telepon</th><th>Action</th></tr>
    <?php
	include "../class.php";
	$row=$obj->select("penerbit");
	for($i=0; $i<sizeof($row); $i++){
		echo "<tr><td> ".$row[$i]['id_penerbit']." </td><td> ".$row[$i]['nama_penerbit']." </td><td> ".$row[$i]['alamat']." </td><td> ".$row[$i]['no_tlp']." </td><td><a href='admin_edit_penerbit.php?id=".$row[$i]['id_penerbit']."' class='btn btn-xs btn-success'>Edit</a> | <a ";?>onclick="return confirm('Apakah anda yakin ingin mengahapus penerbit <?php echo $row[$i]['nama_penerbit'];?>')" <?php echo " href='../proses.php?act=hapus_penerbit&id=".$row[$i]['id_penerbit']."'  class='btn btn-xs btn-success'>Hapus</a></td></tr>";
	}

	?>
</table>
</div>
</div>
</p>

