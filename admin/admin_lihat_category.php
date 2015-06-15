<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Kategori
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Kategori</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Lihat
                            </li>
                        </ol>
                    </div>
                </div>
<a href="admin_add_category.php" class="btn btn-xs btn-primary"> Tambah Kategori</a>
<p align="center">
<div class="col-lg-6">
<div class="table-responsive">
<table class="table table-hover table-striped">
	<tr><th>ID Kategori</th><th>Nama Kategori</th><th>Action</th></tr>
    <?php
	include "../class.php";
	$row=$obj->select("genre");
	for($i=0; $i<sizeof($row); $i++){
		echo "<tr><td> ".$row[$i]['id_genre']." </td><td> ".$row[$i]['genre']." </td><td><a href='admin_edit_category.php?id=".$row[$i]['id_genre']."&nama=".$row[$i]['genre']."' class='btn btn-xs btn-success'>Edit</a> | <a ";?>onclick="return confirm('Apakah anda yakin ingin mengahapus genre <?php echo $row[$i]['genre'];?>')" <?php echo " href='../proses.php?act=hapus_genre&id=".$row[$i]['id_genre']."' class='btn btn-xs btn-success'>Hapus</a></td></tr>";
	}

	?>
</table>
</div>
</div>
</p>
