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

<?php

/* envoie cookie =========================================================================== */
	setcookie("entrainement","nfa017",time()+20); // création cookie
	
	echo '<a href="index.php"> pour voir le cookie </a>'
?>
</body>

</html>