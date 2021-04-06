<?php

function getPage($db){

    $lesPages['accueil'] = "accueilControleur";
    $lesPages['apropos'] = "aproposControleur";
    $lesPages['mentions'] = "mentionsControleur";
    $lesPages['inscrire'] = "inscrireControleur";
    $lesPages['connexion'] = "connexionControleur";
    $lesPages['contact'] = "contactControleur";
    $lesPages['maintenance'] = "maintenanceControleur";
    $lesPages['deconnexion'] = "disconnectControleur";
    $lesPages['utilisateur'] = "utilisateurControleur";
    $lesPages['modifier'] = "utilisateurModifControleur";
    $lesPages['commentaires'] = "commentairesControleur";
    
    if ($db!=null){
        if(isset($_GET['page'])){
            $page = $_GET['page']; }
        else{
            $page = 'accueil';
        }
        if (!isset($lesPages[$page])){
            $page = 'accueil';
        }
            $contenu = $lesPages[$page];}
        else{
            $contenu = $lesPages['maintenance'];
        }
       return $contenu;
    }
?>
