<?php

include 'db.php';

function get_order(){
    if (isset($_GET['order'])) {
        if ($_GET['order']=='ASC') {
            return 'DESC';
        }
    }
    return 'ASC';
}

if (isset($_GET['term'])) {
    $query = $newBD->query('SELECT *
    FROM eleve ORDER BY '.$_GET['term'].' DESC');
}

if (isset($_GET['order']) && isset($_GET['term'])) {
    $query = $newBD->query('SELECT *
    FROM eleve ORDER BY '.$_GET['term'].' '.$_GET['order']);
}