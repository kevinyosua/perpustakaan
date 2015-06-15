<div id="content" class="right">
		<h2>Welcome to Floral Shop</h2>
		<p>Floral Shop is free website template by templatemo. Sed in suscipit risus, eget consectetur justo. Praesent lacinia, nisi quis commodo consectetur, diam magna laoreet felis, a pulvinar mauris enim in felis. Phasellus in mauris velit. In pellentesque massa in nisl auctor pellentesque. Donec fermentum convallis purus, id luctus nulla tempus in. Aliquam diam nibh, consectetur quis fringilla facilisis, egestas sed odio. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        <?php include"konek.php";
        $sql = "select * from judul_buku";
        $result = mysql_query($sql);
        if($result){
            while($row=mysql_fetch_array($result)){ ?>
            <div class="product_box">
                <a href="productdetail.php"><img src="images/product/<?php echo $row['gambar1'];?>" alt=<?php echo $row['alternatif'];?> /></a>
                <h3><?php echo $row['judul'];?></h3>
                <p class="product_price">Rp.<?php echo $row['harga'];?>,00</p>
                <p class="add_to_cart">
                    <a href="productdetail.php">Detail</a>
                    <a href="shoppingcart.php">Add to Cart</a>
                </p>
            </div> 
            <?php    
            }}else{
                echo "gagal menampilkan data";
        }?>
           	
        
        
        <div class="blank_box">
        </div>    
    </div>