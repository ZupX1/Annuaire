<title>Dashboard Admin</title>
<script src="https://kit.fontawesome.com/ab98ebb4c8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="main.css">
<nav class="ong">
        <div class="onglets">
            <a href="index.html">Accueil</a>
            <a href="form.html">form</a>
            <a href="gestion.php">Voir les commandes</a>
            <a href="add.php">Ajouter/Supprimer des produits</a>
          </div>
      </nav>
<body id="admin">
    
<h1 class=h1>Gestion des commandes</h1>
<table>
    <tr>
        <td scope="row"><strong>#</strong></td>
        <td><strong>Nom</strong></td>
        <td><strong>Prénom</strong></td>
        <td><strong>Sexe</strong></td>
        <td><strong>Mail</strong></td>
        <td><strong>tel</strong></td>
        <td><strong>specialité</strong></td> 
        <td><strong>adresse</strong></td> 
        <td><strong>ville</strong></td>
        <td><strong>lvl</strong></td>
        <td><strong>alt</strong></td>
    </tr>

<?php
include 'db.php';

try {
    $query = $newBD->query('SELECT * FROM eleve');
    while($row = $query->fetch()){
        $row = array_map("utf8_encode", $row);

        if(isset($_GET['id_supp'])){
            $idi=$_GET['id_supp'];
            $datasupp="DELETE FROM eleve WHERE id_eleve = $idi";
            $newBD->prepare($datasupp)->execute(); 
            header("Location:gestion.php");
        }

        if(isset($_GET['id_valid'])){
            $idis=$_GET['id_valid'];
            $dataup="UPDATE commande SET valide=1 WHERE id = $idis";
            $dbh->prepare($dataup)->execute(); 
            header("Location:gestion.php");
        } 
        
        if(isset($_GET['id_annul'])){
            $idis=$_GET['id_annul'];
            $dataup="UPDATE commande SET valide=0 WHERE id = $idis";
            $dbh->prepare($dataup)->execute(); 
            header("Location:gestion.php");
        }

        
        $id = $row['id_eleve'];
        $lastname = $row['nom_eleve'];
        $name = $row['prenom_eleve'];
        $sexe = $row['sexe_eleve'];
        $mail = $row['mail_eleve'];
        $tel = $row['tel_eleve'];
        $special = $row['specialite_eleve'];
        $loc = $row['adresse_eleve'];
        $town = $row['ville_eleve'];
        $etu = $row['etude_eleve'];
        $alt = $row['altern_eleve'];
        echo "<tr> 
        <td scope='row'>$id</td>
        <td>$lastname</td>
        <td>$name</td>
        <td>$sexe</td>
        <td>$mail</td>
        <td>$tel</td>
        <td>$special</td>
        <td>$loc</td>
        <td>$town</td>
        <td>$etu</td>
        <td>$alt</td>";
        // if ($valid == 0) {
        //    echo "<td>Non<a href='gestion.php?id_valid=".$id."' id='update'>&nbsp&nbsp&nbspCliquez pour valider</a></td>";
        // }

        // else {
        //     echo "<td>Oui<a href='gestion.php?id_annul=".$id."' id='update'>&nbsp&nbsp&nbspCliquez pour annuler</a></td>";
        // }
        echo "<td><a href='gestion.php?id_supp=".$id."' id='delete'>Supprimer</a></td>
        </tr>";
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>
</table>
</body>