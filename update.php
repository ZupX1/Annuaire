<?php 

include 'db.php';

if(isset($_GET['id_alto'])){
    $idis=$_GET['id_alto'];
    $dataup="UPDATE eleve SET altern_eleve = 'Oui' WHERE id_eleve = $idis";
    $newBD->prepare($dataup)->execute(); 
    header("Location:gestion.php");
} 

if(isset($_GET['id_altn'])){
    $idis=$_GET['id_altn'];
    $dataup="UPDATE eleve SET altern_eleve = 'Non' WHERE id_eleve = $idis";
    $newBD->prepare($dataup)->execute(); 
    header("Location:gestion.php");
}
