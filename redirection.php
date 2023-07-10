<?php

$page = $_GET["page"];

switch ($page) {

    case "portefeuille":
        $vue = file_get_contents("Portefeuille/portefeuille.html");
        break;

    case "CV":
        //défini le type de fichier à ouvrir
        header('Content-type: application/pdf');

        //ouvre le fichier qui correpond au chemin
        readfile('CV/CV.pdf');

    case "projet":
        require_once("Projet/projet.php");
        break;

    default:
        require_once("Accueil/accueil.php");
        break;

    /*
case "1ère":
    //défini le type de fichier à ouvrir
    header('Content-type: application/pdf');

    //ouvre le fichier qui correpond au chemin
    readfile('Attestation/attestation_2022.pdf');


case "2ème":
    //défini le type de fichier à ouvrir
    header('Content-type: application/pdf');

    //ouvre le fichier qui correpond au chemin
    readfile('Attestation/attestation_2022.pdf');
    */

    case "diplome":
        //défini le type de fichier à ouvrir
        header('Content-type: application/pdf');

        //ouvre le fichier qui correpond au chemin
        readfile('Diplôme/SLAM.pdf');
        break;


    case "contact":
        $contact = file_get_contents("Contact/contact.html");
        echo $contact;
        break;

}

$sticky = file_get_contents("Base/sticky.html");
$footer = file_get_contents("Base/footer.html");

$vue = str_replace("%sticky%", $sticky, $vue);
$vue = str_replace("%footer%", $footer, $vue);

echo $vue;

?>