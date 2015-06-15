<table>
	<tr><th>ID Member</th><th>Nama</th></tr>
    <?php
    include "../class.php";
	$row=$obj->select("anggota","status","-1");
	for($i=0; $i<sizeof($row);$i++){
		echo "<tr style='cursor:pointer;' onclick='show($i)';><td>".$row[$i]['id_anggota']."</td><td>".$row[$i]['nama']."</td></tr>";
	}
	?>
</table>
<div id="detil" style="display:none;">
    <table onMouseOver="">
        <tr><td style="">ID Member </td><td> : </td><td id="id"> </td></tr>
        <tr><td>No KTP </td><td> : </td><td id="ktp"> </td></tr>
    	<tr><td>Nama </td><td> : </td><td id="nama"> </td></tr>
        <tr><td>Alamat </td><td> : </td><td id="alamat"> </td></tr>
       	<tr><td>Tanggal Lahir </td><td> : </td><td id="tgl"> </td></tr>
        <tr><td>No. Telepon </td><td> : </td><td id="hp"> </td></tr>
        <form action="../proses.php?act=validasi" method="post"><input type="hidden" id="h_id" name="id"> 
        <tr><td><input type="button" value="Close" onClick='document.getElementById("detil").style.display="none";' style="width:100%;"></td><td>  </td><td id=""><input type="submit" value="Validasi" style="width:100%;"></form> </td></tr>

        
    </table>
</div>
<script>
	function show(i){
		document.getElementById("detil").style.display="block";
		var x = new Array(<?php echo json_encode($row);?>)
		document.getElementById("id").innerHTML=x[0][i][0];
		document.getElementById("h_id").value=x[0][i][0];
		document.getElementById("ktp").innerHTML=x[0][i][2];
		document.getElementById("nama").innerHTML=x[0][i][3];
		document.getElementById("alamat").innerHTML=x[0][i][5];
		document.getElementById("tgl").innerHTML=x[0][i][4];
		document.getElementById("hp").innerHTML=x[0][i][6];
		
		
	}
</script>


