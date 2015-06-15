  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.sticky.js"></script>
  <script>
    $(window).load(function(){
      $(".ddsmoothmenu").sticky({ topSpacing: 0 });
    });
  </script>
<div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="products.php">Gallery</a>
                    <ul>
                        <li><a href="#subpage1">Sub Page One</a></li>
                        <li><a href="#subpage2">Sub Page Two</a></li>
                        <li><a href="#subpage3">Sub Page Three</a></li>
                        <li><a href="#subpage4">Sub Page Four</a></li>
                        <li><a href="#subpage5">Sub Page Five</a></li>
                  	</ul>
                </li>
                <li><a href="checkout.php">Registration</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div id="templatemo_search">
                <form action="#" method="get">
                  	<input type="text" value="Site Search" name="keyword" id="keyword" title="keyword" 
                  			onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  	<input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div>
            <br style="clear: left" />
        </div>