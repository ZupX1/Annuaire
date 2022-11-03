<?php

include 'db.php';
include 'objet.php';

if (isset($_POST["nom"])&&
        isset($_POST["prenom"])&&
        isset($_POST["sexe"])&&
        isset($_POST["mail"])&&
        isset($_POST["phone"])&&
        isset($_POST["spec"])&&
        isset($_POST["loc"])&&
        isset($_POST["town"])&&
        isset($_POST["lvl"])&&
        isset($_POST["alt"])){
            
            $nouvoEleve = new Eleve();

            $nouvoEleve->lastname = $_POST['nom'];
            $nouvoEleve->name = $_POST['prenom'];
            $nouvoEleve->sexe = $_POST['sexe'];
            $nouvoEleve->mail = $_POST['mail'];
            $nouvoEleve->tel = $_POST['phone'];
            $nouvoEleve->special = $_POST['spec'];
            $nouvoEleve->loc = $_POST['loc'];
            $nouvoEleve->town = $_POST['town'];
            $nouvoEleve->etu = $_POST['lvl'];
            $nouvoEleve->alt = $_POST['alt'];

            $verification= createEleve($nouvoEleve);
            if ($verification){
                echo"réussite";
            }else{
                echo "fail";
            }
        
        }else {
            echo "Une variable bug";
        }

        header('Location:form.html')
        ?>