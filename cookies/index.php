<!DOCTYPE HTML> 

<html lang="fr">

<head>
	<meta charset=utf-8"/>
	<title>super-globale</title>
</head>

<body>
	<h1>super-globale</h1>

	<!-- création du lien avec paramètre -->
	
<p><a href ="cookie-creation.php?param=toto">vers cookie-creation.php</a></p>

<?php echo $_GET['param']; ?>

<!-- Affichage Cookies -->

<p>
	<strong>Cookie : </strong>
		<?php 
			if(isset($_COOKIE['entrainement'])) {
				echo "Bienvenue";
			} else {
				echo "";
			}
		?>
</p>
</body>
</html>