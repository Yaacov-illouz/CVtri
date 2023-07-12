<?php

function extractLinkedInLink($inputString)
{
    $pattern = '/(https?:\/\/(?:www\.)?linkedin\.com\/\S+)/i';
    preg_match($pattern, $inputString, $matches);

    if (isset($matches[0])) {
        $linkedinLink = $matches[0];
        return $linkedinLink;
    }

    return '';
}

// Exemple d'utilisation
$inputString = "Voici un texte contenant un lien vers LinkedIn : https://www.linkedin.com/in/johndoe/";
$linkedinLink = extractLinkedInLink($inputString);
echo $linkedinLink;

?>