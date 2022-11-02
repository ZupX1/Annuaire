<?php

include 'db.php';

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
            $insertion=$newBD->prepare("INSERT INTO eleve VALUES(NULL,:nom,:prenom,:sexe,:mail,:phone,:spec,:loc,:town,:lvl,:alt)");
            $insertion->bindValue(":nom",$_POST["nom"]);
            $insertion->bindValue(":prenom",$_POST["prenom"]);
            $insertion->bindValue(":sexe",$_POST["sexe"]);
            $insertion->bindValue(":mail",$_POST["mail"]);
            $insertion->bindValue(":phone",$_POST["phone"]);
            $insertion->bindValue(":spec",$_POST["spec"]);
            $insertion->bindValue(":loc",$_POST["loc"]);
            $insertion->bindValue(":town",$_POST["town"]);
            $insertion->bindValue(":lvl",$_POST["lvl"]);
            $insertion->bindValue(":alt",$_POST["alt"]);
            $verification= $insertion->execute();
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