<?php 
//Initialisation de la page html
$htm="";

//Appel des fonctions de menus
include 'modele/menu.php';

//Appel du template de sortie
$sortie=file("vue/sommaire.html");

if (isset($_GET['a'])) $action=$_GET['a']; else $action=""; 

switch ($action) {
    //Si aucune action n'est envoy�e dans l'URL on affiche l'accueil
    case "":
        $contenu='<h1>Site de révision Mathématique & Physique</h1>
                  <a href="index.php?a=physique" class="physique"><h1> PHYSIQUE</h1> </a>
                  <a href="index.php?a=mathematique" class="mathematique"><h1> MATHÉMATIQUE</h1> </a>';
        break;
    case "physique":
        require_once('modele/physique.php');
        break;
    case "math":
        require_once('modele/math.php');
        break;
    case "impedance":
        require_once('modele/impedance.php');
        break;
}
//Transformation de la page sommaire, les balises sont remplac�es
foreach ($sortie as $valeur) {
    $valeur=preg_replace('/{#CONTENU}/',$contenu,$valeur);
    $valeur=preg_replace('/{#MENUH}/',menuhaut(),$valeur);
    $htm.=$valeur;
}
//Affichage final de la page sommaire modifi�e
print $htm;

?>