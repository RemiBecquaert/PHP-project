<?php

function contactControleur($twig, $db){
    $form = array();
    if (isset($_POST['btSubmit'])){      
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];       
        $text = $_POST['text'];
        $form['valide'] = true;    
          
        $contact = new Contact ($db);
        $exec = $contact->insert($nom, $prenom, $email, $text);
            if (!$exec){          
                $form['valide'] = false;            
                $form['message'] = 'Problème d\'insertion dans la table contact ';          
            }
        
        $form['nom'] = $nom;
        $form['prenom'] = $prenom;
        $form['email'] = $email;     
        $form['text'] = $text;
        }
    
        echo $twig->render('contact.html.twig',array('form'=>$form));

    }

?>