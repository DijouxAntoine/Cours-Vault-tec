<?php
session_start();
?>
 
<?php
// Ajoute du header
include('php/header.php');
?>

<style>
#conteneur-b4{
    display: block;
    margin: auto;
    width: 400px;
    padding: 12px;
    border:1px solid red;
    background: red;
    color: yellow;
    font-size: 120%;
}
</style>


     <div id="liseret"></div>

        <div id="contenu">

            <!-- TITRE DE LA PAGE -->
            <h1>Hauteur & largeur</h1>


            <section>

            <!-- PRESENTATION -->
                <p class="presentation"> Ici, un petit "tricks" sympath permettant d'afficher la hauteur et la largeur d'une page avec JS </p>
                <p>Ci-dessous, l'extrait du script javascript vous permettant d'afficher la largeur et la hauteur de la fenêtre</p>


<textarea style="height: 230px;">
/*Déclaration des variables*/
var hauteur = (document.body.clientHeight);
var largeur = (document.body.clientWidth);


/*Message d'affichage*/
document.write("<div id='conteneur-b4'>");
document.write("<div><strong>Les dimensions de la fenêtre</strong></div>")
document.write("<div>La hauteur est de : " + hauteur + "</div>");
document.write("<div>La largeur est de : " + largeur + "</div>");
document.write("</div>"); 
</textarea>


        <p>Ce qui donne le résultat suivant</p>

        <span id="dimension"></span>

            </section>
        </div><!-- id="contenu" -->
    
<?php
// Ajoute du header
include('php/footer.php');
?>