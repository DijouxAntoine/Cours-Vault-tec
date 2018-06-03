<?php include('php/header.php');?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset=utf-8"/>
</head>
<body>
<p><a href ="cookie_creation.php?param=bienvenue">vers cookie_creation.php</a></p>
                                            
<?php echo $_GET['param'];?>

<!-- Affichage Cookies -->
<p>	<strong>Cookie : </strong>
<?php if(isset($_COOKIE['bienvenue'])) {echo "bienvenue";} else {echo"";}?>
</p>
</body>
</html>
                                                 
<?php include('php/footer.php');?>