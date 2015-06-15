<?php
	include "../class.php";
?>
<script src="../script.js"></script>
<body onLoad='document.getElementById("nama").select()'>
    <form action="../proses.php?act=edit_penulis" method="post">
    	<a href="admin_lihat_penulis.php">< back </a>
        <table>
            <tr><td> ID Penulis </td><td> : </td><td><input type="text" value="<?php echo $_GET['id'];?>" name="id" readonly/></td></tr>
            <?php 
				$row=$obj->select("penulis","id_penulis",$_GET['id']);
			?>
            <tr><td> Nama Penulis </td><td> : </td><td><input required type="text" name="nama" value="<?php echo $row[0]['nama_penulis'];?>" id="nama" /></td></tr>
            <tr><td> Alamat </td><td> : </td><td><textarea required name="alamat"  style="font-family:Arial;width:100%;height:50px;"><?php echo $row[0]['alamat'];?>
            </textarea></td></tr>
            <tr><td> No. Telepon </td><td> : </td><td><input required onKeyUp="num_only(event, this)" maxlength="12" value="<?php echo $row[0]['telp'];?>" type="text" name="no_telp" id="no_telp" /></td></tr>
            
            <tr><td colspan="3" > <input style="width:100%;" type="submit" value="Edit"> </td></tr>
        </table>
    </form>
</body>