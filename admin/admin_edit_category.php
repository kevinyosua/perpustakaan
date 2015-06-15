<body onLoad='document.getElementById("cat").select()'>
    <form action="../proses.php?act=edit_genre" method="post">
        <table>
            <tr><td> ID Kategori </td><td> : </td><td><input type="text" value="<?php echo $_GET['id'];?>" name="id_cat" readonly/></td></tr>
            <tr><td> Nama Kategori </td><td> : </td><td><input type="text" name="cat" value="<?php echo $_GET['nama'];?>" id="cat" /></td></tr>
            <tr><td colspan="3" > <input style="width:100%;" type="submit" value="Edit"> </td></tr>
        </table>
    </form>
</body>