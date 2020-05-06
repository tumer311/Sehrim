<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="site1.css">
		<link rel=”stylesheet” href=”css/bootstrap.css”>
		<link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
	</head>
	<body style="background-color:#F5F5F5;">
		<div>
			<ul class="navlist">
				<li style="float:left"><a href="#hakkimda"><i class="demo-icon icon-home">&#xe800;</i></a></li>
				<li><a href="#yasadıgım">Yaşadığım Şehir</a></li>
				<li><a href="#memleketim">Memleketim</a></li>
				<li><a href="#hakkimda">Hakkımda</a></li>
			</ul>
			<nav class=”navbar fixed-top navbar-expand-md navbar-light bg-light”>
		</div>
		<div id="login">
		
			<img src="man.jpg" alt="nature" class="responsive">
		
		
			<form  class="formlog" action="" method="post" name="Login_Form">
			  <table width="350" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
				<?php if(isset($msg)){?>
				<tr>
				  <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
				</tr>
				<?php } ?>
				<tr>
				  <td align="right" valign="top">Username</td>
				  <td align="right"><input name="Username" type="text" class="textbox"></td>
				</tr>
				<tr>
				  <td align="right">Password</td>
				  <td align="right"><input name="Password" type="password" class="passbox"></td>
				</tr>
				<tr>
				  <td> </td>
				  <td align="right"><input name="Submit" type="submit" value="Login" class="button1"></td>
				</tr>
			  </table>
			</form>
		
		</div>
		

	</body>

</html>