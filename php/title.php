<?php

$chemincomplet = $_SERVER['SCRIPT_FILENAME'];
$cheminInvalide = dirname($chemincomplet);
$NomFichier = str_replace($cheminInvalide, '', $chemincomplet);
$NomFichier = str_replace('.php', '', $NomFichier);
$NomFichier = str_replace('/', '', $NomFichier);
$NomFichier = str_replace('-', ' ', $NomFichier);
$NomFichier = ucfirst($NomFichier);


echo $NomFichier;