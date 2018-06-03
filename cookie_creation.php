<?php include('php/header.php');?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset=utf-8 "/>
</head>
<body>
<p><a href ="cookie_creation.php?param=bienvenue">vers cookie_creation.php</a></p>
                                             
<?php echo $_GET['param']; ?>

<!--envoie cookie-->
<?php setcookie("bienvenue",time()+20); // création cookie
	echo '<a href="show_cookie.php "> pour voir le cookie </a>'?>
</body>
</html>

<?php include('php/footer.php');?>