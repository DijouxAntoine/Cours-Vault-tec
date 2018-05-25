<!DOCTYPE html>
<html lang="fr">
<head>

	<!-- general -->
    <meta charset="utf-8" />
    <meta name="google-site-verification" content="Wnyj8JBUZQy6b_twuVR5AW08abBavdTStKWeYJaCn98" />
    <meta name="keywords" lang="fr" content="développeurs web,  développeurs, web, apprendre,langage de programmation, language, programmation, tutoriels,astuces, nouvelle technologie, nodejs, canvas, gif, GIF, grands publics, public, grand public, programmation, developpement, dev, vault-tec, tec, bonjour, bienvenue, cours en ligne, en ligne, ligne, design, code, javascript,js,JS" />
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
        <a href="accueil.php"><div id="centre_img"><img class="img_header" src="images/header/plan-de-travail-1.png" alt="logo"/></div></a>
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
         <li class="menu-html"><a href="a-partie-programmation.php">Partie "Programmation"</a>
               <ul class="submenu">
                   <li><a href="a1.php">A1 - Formulaire en Javascript</a></li>
                   <li><a href="a2.php">A2 - NodeJS</a></li>
               </ul>
            </li>
            <!--Partie CSS-->
            <li class="menu-css"><a href="b-partie-designe.php">Partie "Design"</a>
                <ul class="submenu">
                    <li><a href="b3.php">B3 - CANVAS </a></li>
                    <li><a href="b4.php">B4 - Hauteur/Largeur (JS)</a></li>
                </ul>
            </li>
           <li class="menu-contact"><a href="contact.php">Contact</a></li>
            <li class="menu-contact"></li> 
      
          <!-- Bouton de connexion -->
           <li class="li_bouton_conexxion">
            <form class="form-bouton_connexion">
            <input class="bouton" onclick="javascript:document.location.href='index.php' " value="Liste des articles" type="button">
            </form>
            </li>
            
            <!--Bouton de deconnection-->
               <li class="li_bouton_conexxion">
            <form class="form-bouton_connexion">
            <input class="bouton" onclick="javascript:document.location.href='deconnexion.php' " value="Déconnection" type="button">
            </form>
            </li>
                    
        </ul>
         
          
    </nav>  
<!-- FIN MENU -->