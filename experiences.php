<?php 

$string = "Ceci est une chaîne de CARACTÈRES jusqu'à CE QUE le PROGRAMME RENCONTRE UN MOT écrit ENTIEREMENT EN MAJUSCULE.";

// Utilisation de preg_match pour trouver le premier mot en majuscules
preg_match('/^(.*?)([A-Z\s]+)$/u', $string, $matches);

// Extraction du contenu avant le mot en majuscules
$contenu = $matches[1];

echo $contenu;

?>





