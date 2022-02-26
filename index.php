<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
	font-family: sans-serif;
	background: #ebf9fb;
}

h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 500px;
    font-size: 50px;
    /* margin-top: 80px; */
}

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	/* margin-top: 80px; */
	background: white;
	/*meletakkan form ke tengah*/
	margin: 120px auto;
	padding: 30px 20px;
	box-shadow: 0px 0px 100px 4px #d6d6d6;
    border-radius: 20px;
}

label{
	font-size: 11pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
    border-radius: 20px;
}

.tombol_login{
	background: #2aa7e2;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 20px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}

.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}
    </style>
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<!-- <p class="tulisan_login">Silahkan login</p> -->
		<h1>LOGIN</h1>
        <br>
		<form action="login_proses.php" method="post">
			<label style="font-weight: bold;" >Username</label> <br>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required"> <br>
 
			<label style="font-weight: bold;" >Password</label><br>
			<input type="password" name="sandi" class="form_login" placeholder="Password" required="required"> <br><br><br>
 
			<input type="submit" class="tombol_login" value="LOGIN"> <br>
		</form>
		
	</div>
 
 
</body>
</html>