<?php 

include 'db.php';

if(isset($_GET['id_supp'])){
    $idi=$_GET['id_supp'];
    $datasupp="DELETE FROM eleve WHERE id_eleve = $idi";
    $newBD->prepare($datasupp)->execute(); 
    header("Location:gestion.php");
}

?>