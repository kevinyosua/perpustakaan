<?php
	include "../class.php";
?>
<script src="../script.js"></script>
<body onLoad='document.getElementById("nama").focus()'>
    <form action="../proses.php?act=add_penulis" method="post">
    	<a href="admin_lihat_penulis.php">< back </a>
        <table>
            <tr><td> ID Penulis </td><td> : </td><td><input type="text" value="<?php echo $obj->cari_id("penulis");?>" name="id" readonly/></td></tr>
            <tr><td> Nama Penulis </td><td> : </td><td><input required type="text" name="nama" id="nama" /></td></tr>
            <tr><td> Alamat </td><td> : </td><td><textarea required name="alamat"  style="font-family:Arial;width:100%;height:50px;"></textarea></td></tr>
            <tr><td> No. Telepon </td><td> : </td><td><input required onKeyUp="num_only(event, this)" maxlength="12" type="text" name="no_telp" id="no_telp" /></td></tr>
            
            <tr><td colspan="3" > <input style="width:100%;" type="submit" value="Tambah"> </td></tr>
        </table>
    </form>
</body>