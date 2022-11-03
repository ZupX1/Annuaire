<?php

include 'objet.php';
include 'db.php';

deleteEleve($_GET["id_eleve"]);
header('Location:gestion.php');