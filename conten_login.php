<html>
<head>
<title>Login - Perp-Komik</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
<link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>

<body>
<center>
    <div id="form_login">
        <form action="proses.php?act=login" method="post" class="box login">
		<div class="form-top">
            <div class="form-top-left">
                <h3>Login Perp-Komik</h3>
                <p>Enter your username and password to log on:</p>
            </div>
            </div>
            <fieldset class="boxBody">
			<input id="user" required="" value="Username" onclick=' if(this.value=="Username")  this.value="";' onblur='if(this.value=="")  this.value="Username";' type="text" name="user" />
			<input id="pass" required="" type="text" value="Password" onclick=' if(this.value=="Password") { this.value=""; this.type="password"}' onblur='if(this.value=="")  {this.value="Password"; this.type="text"}'  name="pass" />
			</fieldset>
			<footer>
			<input type="hidden" value="" id="ok" />
            <input onmousedown="check();" style="width:100%" type="submit" value="Login" class="btnLogin"/>
			</footer>
        </form>
    </div>
</center>
<footer id="main">
  Halaman Login Perp-Komik
</footer>
<script>
	function check(){
		if (document.getElementById("user").value=="Username" || document.getElementById("pass").value=="Password" ){
			alert("Masih ada yang kosong");
		}
	}
</script>
</body>
</html>

