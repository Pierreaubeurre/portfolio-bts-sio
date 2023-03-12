<?php

$projet = $_GET["projet"];

switch ($projet){

    case ("1"):
        $vue = file_get_contents("Projet/precision/projet_1/projet_1.html");
        break;

    case("competence"):
        $vue = file_get_contents("Projet/precision/competence_v2/competence.html");
        break;

    case("roulette"):
        $vue = file_get_contents("Projet/precision/roulette/roulette.html");
        break;

    case("audit"):
        $vue = file_get_contents("Projet/precision/audit/audit.html");
        break;

    case("doliphone"):
        $vue = file_get_contents("Projet/precision/doliphone/doliphone.html");
        break;

    case("ASETAR"):
        $vue = file_get_contents("Projet/precision/ASETAR/ASETAR.html");
        break;

    case("calc_java"):
        $vue = file_get_contents("Projet/precision/calc_java/calc_java.html");
        break;

    default:
        $vue = file_get_contents("Portefeuille/portefeuille.html");
        break;
    
}

?>