<div class="sidebar_box"><span class="bottom"></span>
            <h3>Categories</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
				<?php
					include("konek.php");
					$sql="SELECT * FROM genre";
					$hasil=mysql_query($sql);
					if($hasil){
						while($baris=mysql_fetch_array($hasil)){?> 						
                    <li><a href="#"><?php echo $baris['genre'];?></a></li>
					<?php
					}
						}else {
							echo "gagal menampilkan data";
						}
					?> 
                </ul>
            </div>
        </div>