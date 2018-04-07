<meta charset="utf-8">

<?php 
session_start();


if(issset($_SESSION['pseudo']))
{
    

echo "Bonjour ".$_SESSION['pseudo'];
?>


<br/><br/><a href="logout.php">Me déconnecter</a>
<br/><a href="update.php">Changer mes informations</a>
<br/><a href="desinscrire.php">Se désinscrire</a>

<?php
}else{
    header ('Location : login.php')
} 
?>