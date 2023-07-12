<?php 

$textCV = "P R O F I L É T U D E S N O A B O U S K I L A 07 64 41 21 30 Toulouse , France Véhiculé noabouskil@gmail.com C O N T A C T L I E N S https://github.com/noabo uskila https://www.linkedin.com/in/ noa-bouskila/ T E C H N O L O G I E S 2022/23 Bac+4 Developpement React.js D E V E L O P P E U S E R E A C T J S & N A T I V E Bonjour , Apres avoir effectué mes études en Développement Front-end , je me suis spécialisé vers le Développement REACT.js ainsi que React Native. J'ai été également amenée à travailler dans le développent JavaScript à l'interieur de l'environnement Salesforce (LWC) REACT.Js React Native Redux Api Rest JavaScript Ajax TypeScipt Jquery Firebase Git, GitHub Wordpress HTML CSS , Sass Bootstrap SQL , mySQL PHP , phpMyAdmin SEO Adobe XD Photoshop Canva DISPONIBLE DES LE 1JANVIER 2023 EN FREELANCE Ecole Openclassrooms Durant mes études chez OpenClassrooms, je me suis orienté vers le JavaScript et React.js. J'ai dû réaliser plusieurs projets avec Redux, API Rest , TypeScript ainsi que déployer des tests unitaires . J'ai également appris à établir une veille Technologique. Bac+3 Developpement Web / Chef de projet 2021 Ecole Doranco Chez Doranco j'ai monté en compétence sur des technologies variées tels que Sass, JavaScript, SQL, PHP, initiation à Symfony ,SEO. La formation accentuait également sur la gestion de gestion de projet avec les méthodes Agiles/ Scrum. Integration & Développement Front-end 2020 Ecole Social Builder / WebForce3 C'est avec SocialBuilder que je me suis reconvertie dans les metiers du Web en apprenant les bases de développement avec HTML , CSS ,JAVASCRIPT, Adobe XD , SEO et initiation en React. Projet d'intégration Web d'un site de restaurant BTS Gestion Comptabilité & Management 2017 Ecole Beth Sefer Certification Udemy React Native 2023 Dans le Cadre de cette Certification , je me spécialise en React Native en apprenant à coder et déployer des applications mobile en IOS et Android avec Expo Cli , React Native CLI , Firebase , Redux , EAS Build . La certification inclus également l'apprentissage des outils de débogage. https://noabouskila.github.io /Portfolio-React/2Français : Natif Anglais , Hébreu : Niveau B1/B2 L A N G U E S E X P E R I E N C E S Professeur en Javascript Ecole Superieur Euroforma Paris 11eme Au sein de l'école Euroforma , je faisais partie des 3 enseignants d'informatique ; je dispensais des cours de JavaScript aux étudiants niveau Bac+2. Développement Composants LWC-JS Salesforce LWC - Lightning Web Components Dans le Cadre de mon Travail chez PSM Consulting , J'ai été amené à me former et développer des modules et composants personnalisés pour le client à l'intérieur de l'environnement Salesforce , grâce au Framework JavaScript LWC interne à Salesforce. Interaction Studio - Evergage (dossier confidentiel) J'ai également été amené a développer en JavaScript pour la partie Marketing Cloud de Salesforce , à l'aide du Framework JavaScript Interaction Studio (anciennement Evergage). J'ai travaillé sur cette technologie pour le client VO2 Group , dont le besoin était de récupérer les données es utilisateurs lors de leur navigation afin de les réutiliser de facon légale,. PSM Consulting - Paris 19eme Conception et déploiement de site pour Association J'ai donc établi le Cahier des Charges Fonctionnel ainsi que la feuille de route. j'ai ensuite préparé la les Wireframes et maquettes du site Responsive à l'aide de Adobe XD. Ensuite , j'ai développé le site a l'aide du CMS WordPress à la demande du client , en intégrant un Builder ainsi que des plug-ins de paiements , de sécurité , de formulaires et de référencement. Je me suis également occupé de la rédaction Web et des images/Vidéos . Enfin , en parallèles à cela, j'ai conceptualisé des flyers et affiches de publicité pour le Marketing de l'association. Durant cette mission pour le client LMDK , j'avais pour responsabilité de conceptualiser le site internet et le déployer jusqu'à sa livraison. Ce site avait pour mission d'informer l'utilisateur du programme de cette association culturelle et religieuse , mais aussi d'enregistrer des nouveaux adhérents au programme de l'association . Enfin le site devait implémenter un module de paiement pour les dons. Association LMDK - Paris 12eme - Freelance https://github.com/noabouskila/wysiwyg-lwc https://lamaisondekelm.org/";

// Localisation

function afficherVille($chaine) {
    
    $villes = array(
        "Paris",
        "Marseille",
        "Lyon",
        "Toulouse",
        "Nice",
        "Nantes",
        "Strasbourg",
        "Montpellier",
        "Bordeaux",
        "Lille",
        "Rennes",
        "Reims",
        "Le Havre",
        "Cannes",
        "Saint-Étienne",
        "Toulon",
        "Angers",
        "Grenoble",
        "Dijon",
        "Nîmes",
        "Aix-en-Provence",
        "Saint-Quentin-en-Yvelines",
        "Brest",
        "Le Mans",
        "Amiens",
        "Tours",
        "Limoges",
        "Clermont-Ferrand",
        "Villeurbanne",
        "Besançon",
        "Orléans",
        "Londres",
        "New York",
        "Tokyo",
        "Rome",
        "Sydney",
        "Moscou",
        "Rio de Janeiro",
        "Berlin",
        "Amsterdam",
        "Madrid",
        "Le Caire",
        "Mumbai",
        "Bangkok",
        "Singapour",
        "Toronto",
        "Buenos Aires",
        "Mexico",
        "Johannesburg",
        "Hong Kong",
        "Dubai",
        "Shanghai",
        "São Paulo",
        "Los Angeles",
        "Barcelone",
        "Istanbul",
        "Vienne",
        "Prague",
        "Stockholm",
        "Copenhague",
        "Séoul",
        "Budapest"
    );

    $pays = array(
        "Afghanistan",
        "Algérie",
        "Allemagne",
        "Argentine",
        "Australie",
        "Bénin",
        "Brésil",
        "Cambodge",
        "Canada",
        "Chine",
        "Corée du Sud",
        "Croatie",
        "Égypte",
        "Émirats arabes unis",
        "Espagne",
        "États-Unis",
        "France",
        "Grèce",
        "Inde",
        "Italie",
        "Japon"
    );    
    
    foreach ($villes as $index => $ville) {
        $pos = strpos($chaine, $ville);
        
        if ($pos !== false) {
            $debut = max(0, $pos - 20);
            $fin = min(strlen($chaine), $pos + strlen($ville) + 20);
            $sousChaine = substr($chaine, $debut, $fin - $debut);
            
            foreach ($pays as $paysIndex => $codePays) {
                if (strpos($sousChaine, $codePays) !== false) {
                    echo $ville;
                    break 2; // Sortie des deux boucles imbriquées
                }
            }
        }
    }
}

// Exemple d'utilisation
$texte = "Je suis à Paris en France.";
afficherVille($textCV);

?>