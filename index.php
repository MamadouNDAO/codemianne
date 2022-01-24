<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>SEN MARCHE</title>
</head>
<style>
    body{
        color: #000;
    }
    /*.logo {
			border: 1px solid black;
			width: 40px;
			height: 40px;
		}*/
    a{
        text-decoration: none;
        color: #333;
    }

    button{
        cursor: pointer;
        color: #333;
    }
    .nav-bar {
			border-bottom: 3px solid #fca311;
			padding: 10px;
			background-color: #4361ee;
		}
		.logo {
			width: 30px;
			display: inline-block;
			/*border: 1px solid black;
            margin-left: 10px;*/
		}
		.titre {
			width: 15%;
			display: inline-block;
            color: #fff;
            text-transform: uppercase;
            font-weight: bolder;
            margin-left: 10px;
		}
		.navigation {
			width: 80%;
			display: inline-block;
			padding: 2px;
		}
		.navigation>button {
			margin: 0px;
		}
		
        .deco{
            float: right;
        }
</style>
<body>
    <?php
        //session_start();
        
        if(isset($_GET['lien'])){
            if($_GET['lien'] == "profil"){
                require_once("./navbar.php");
                require_once("./profil.php");
            }else if($_GET['lien'] == "marche"){
                require_once("./navbar.php");
                require_once("./marche.php");
            }else if($_GET['lien'] == "produit"){
                require_once("./navbar.php");
                require_once("./produit.php");
            }else if($_GET['lien'] == "inscription"){
                require_once("./inscription.php");
            }else if($_GET['lien'] == "password"){
                require_once("./password.php");
            }
        }else{
            require_once("./login.php");
        }
        
    ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>