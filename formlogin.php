<style type="text/css">
	.wraplogin {
		width: 100%; height: 162px; background-color: #423E40;
		margin-top: -20px; 
	}
	.logincontent{
		width: 40%; margin: auto; background-color: #D9D7D8; padding: 10px;
	}
	.logincontent table{
		margin: auto;
	}
	.logincontent label{
		font-family: sans-serif; font-size: 16pt; font-weight: bold;
	}
	.logincontent input{
		font-size: 16pt; font-family: monospace; 
	}	
	.logincontent button{
		font-size: 16pt; font-family: sans-serif; width: 100%; height: 30px; 
	}	
	#button{
		float: right;	
	}
</style>
<div class="wraplogin" style="display:none;">
	<div class="logincontent"> 
		<form action="" method="POST">
		<table>
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" name="username"></td>
				
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="password"></td>	
				
			</tr>
			<tr>
				<td colspan="2"><button type="button">Log In</button></td>
			</tr>
			<tr>
				<td></td>
				<td>Lupa Password?</td>
			</tr>
		</table>
		</form>
	</div>
</div>		
<button id="button">Log In</button>
<script>
	$("#button").click( function() {
			$(".wraplogin").slideToggle(500, function(){
				$(".wraplogin").css("display","visible");
			});
	});
</script>
