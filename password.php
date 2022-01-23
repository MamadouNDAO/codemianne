<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<title></title>
	<style>
		.container {
			border: 2px solid black;
			width: 30%;
			margin: 0px auto;
			text-align: center; 
		}
		.input-text {
			border: 1px solid black;
			width: 60%;
		}
        .login{
        	width: 20px;
        	transform: translate(0px, 4px);
     }
		.m-1 {
			margin: 100px;
		}
		.checkbox {
			width: 70%;
			margin: 0px auto;
		}
		.checkbox > span {
			font-size: 12px;
		}
		.button {
			/*width: 70%;*/
		}
		.button > button {
			font-size: 10px;
			padding: 2px;
		}
	</style>
  
</head>
<body>
	<h1 align="CENTER">Mot de pass oublié</h1>
	<div class="container">
		<div class="m-1">
				<img class="login" src="./Image/login.png" >
				<input class="input-text" value="email"  type="email">
		</div>
            <div class="button">
	            <button type="submit"><a href="index.php">Retour</button>
		        <button type="submit"><a href="index.php"> Envoyer</button>
            </div>
		</div>

		<p class="divider"></p>
	</div>
</body>
</html>