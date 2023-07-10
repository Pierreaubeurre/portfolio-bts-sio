<?php

function lecture_dossier()
{

    $liste_fichier = array();
    $nombre_fichier = 0;//car tableau indexé commence à 0

    // Liste toutes les entrées du dossier courant et enlève les . et ..

    if ($handle = opendir('Accueil/screen')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {

                $liste_fichier[] = $entry; //tableau des noms des fichiers
                $nombre_fichier++; //int du nombre de fichier 
            }
        }
        closedir($handle);
    }

    $resultat = array($nombre_fichier, $liste_fichier);

    return ($resultat);
}

function random($nombre_fichier)
{
    $nombre_fichier-=1;

    $i = 0;
    $tableau = array();
    while ($i < 3) {
        $image = rand(0, $nombre_fichier);

        if (!in_array($image, $tableau)) {
            $tableau[] = $image;
            $i++;
        }
    }

    return $tableau;

}

function modification($liste_fichier, $tableau_nombre)
{

    $vue = file_get_contents("Accueil/accueil.html");

    $compteur = 0;

    foreach ($tableau_nombre as $value) {

        $nom_fichier=$liste_fichier[$value];

        $chaine_src="%screen".$compteur."%";
        
        $vue=str_replace($chaine_src,$nom_fichier,$vue);//met la source de l'image dans l'html


        $chaine_link="%lien".$compteur."%";

        $link=str_replace(".jpg","",$nom_fichier);
        $link=str_replace(".png","",$link);

        $vue=str_replace($chaine_link,$link,$vue);//met le lien du projet dans l'html

        $compteur++;
    }

    return $vue;

}

//partie executable

$fichier = lecture_dossier();

$tableau_nombre = random($fichier[0]);

$vue=modification($fichier[1], $tableau_nombre);

?>