<?php
	include "../class.php";
?>
<body onLoad='document.getElementById("cat").focus()'>
    <form action="../proses.php?act=add_genre" method="post">
    	<a href="admin_lihat_category.php">< back </a>
        <table>
            <tr><td> ID Kategori </td><td> : </td><td><input type="text" value="<?php echo $obj->cari_id("genre");?>" name="id_cat" readonly/></td></tr>
            <tr><td> Nama Kategori </td><td> : </td><td><input required type="text" name="cat" id="cat" /></td></tr>
            <tr><td colspan="3" > <input style="width:100%;" type="submit" value="Tambah"> </td></tr>
        </table>
    </form>
</body>