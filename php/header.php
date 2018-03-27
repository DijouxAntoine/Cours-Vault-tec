<!DOCTYPE html>
<html lang="fr">
<head>

	<!-- general -->
    <meta charset="utf-8" />
    <title><?php require 'php/title.php'; ?></title>

    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Hanalei" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Faster+One|Sniglet" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/message.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/reception-contact.css" />
    <link rel="stylesheet" href="css/mentions-legales.css" />
    <?php
    $url = substr($_SERVER['REQUEST_URI'],-11);

    if($url != "accueil.php"){
        echo '<link rel="stylesheet" href="css/pages.css" />';
    }
    ?>

    <!-- Zone d'impression -->
    <link rel="stylesheet" type="text/css" media="print" href="css/print.css" />
    
    <!-- icone -->
    <link rel="icon" href="images/logo/Fichier%201@0.5x.png">

    <!-- js -->
    <!-- TOUT LES LIENS JS SONT DANS LE FOOTER CAR CERTAIN SCRIPT NE FONCTIONNE QUE SI ON LE CHARGE A LA FIN -->

    <!-- class php -->
    <?php
    	require 'form.php';
    ?>

</head>
<body onload="ChoixNum();">

<!-- DEBUT HEADER -->
    <header>
        <a href="accueil.php"><div id="centre_img"><img class="img_header" src="images/header/plan-de-travail-1.png"/></div></a>
    </header>
<!-- FIN HEADER -->

<!-- DEBUT MENU -->
      <nav id="impression">
        <label for="menu-mobile" class="menu-mobile">Menu</label> <!--  -->
        <input type="checkbox" id="menu-mobile" role="button"> 
        <ul>
          <!--Partie Accueil-->
            <li class="menu-contact"><a href="accueil.php">Accueil</a>
                <ul class="submenu">                
                </ul>
            </li>
           <!--Partie HTML-->
         <li class="menu-html"><a href="A-partie-programmation.php">Partie "Programmation"</a>
               <ul class="submenu">
                   <li><a href="a1.php">A1 - Formulaire en Javascript</a></li>
                   <li><a href="a2.php">A2 - NodeJS</a></li>
               </ul>
            </li>
            <!--Partie CSS-->
            <li class="menu-css"><a href="B-Partie-designe.php">Partie "Design"</a>
                <ul class="submenu">
                    <li><a href="b3.php">B3 - CANVAS </a></li>
                    <li><a href="b4.php">B4 - Hauteur/Largeur (F177)</a></li>
                </ul>
            </li>
           <li class="menu-contact"><a href="contact.php">Contact</a></li>
            <li class="menu-contact"></li> 
        <!--    <div id="searchbar">
                <form class="form-search" action=" ">
                    <input class="champ-search" type="text" placeholder="Recherche"/>
                    <input class="bouton btn-search" type="button" value="Aller !" />
                </form>
            </div> -->
        </ul>
    </nav>  
<!-- FIN MENU -->