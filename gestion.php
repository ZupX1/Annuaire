<?php
include 'db.php';
include 'objet.php';

$eleves = AllEleve();

?>

<title>Dashboard Admin</title>
<script src="https://kit.fontawesome.com/ab98ebb4c8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="main.css">
<nav class="ong">
        <div class="onglets">
            <a href="form.html">Formulaire d'inscription</a>
            <a href="gestion.php">Voir les inscriptions</a>
          </div>
      </nav>
<body id="admin">
    
<h1 class="h1">Gestion des inscriptions</h1>


<table>
    <tr>
        <td scope="row"><strong>#</strong></td>
        <td><strong>Nom</strong></td>
        <td><strong>Prénom</strong></td>
        <td><strong>Sexe</strong></td>
        <td><strong>Mail</strong></td>
        <td><strong>Téléphone</strong></td>
        <td><strong>Specialité</strong></td> 
        <td><strong>Adresse</strong></td> 
        <td><strong>Ville</strong></td>
        <td><strong>Niveau d'étude</strong></td>
        <td><strong>Alternance ?</strong></td>
        <td><strong>Actions</strong></td>
    </tr>

<?php
foreach ($eleves as $eleve) {
?>      <tr> 
            <td scope='row'><?= $eleve->id?></td>
            <td><?= $eleve->lastname?></td>
            <td><?= $eleve->name?></td>
            <td><?= $eleve->sexe?></td>
            <td><?= $eleve->mail?></td>
            <td><?= $eleve->tel?></td>
            <td><?= $eleve->special?></td>
            <td><?= $eleve->loc?></td>
            <td><?= $eleve->town?></td>
            <td><?= $eleve->etu?></td>
            <td><?= $eleve->alt?></td>
        <td>
            <a href="edit-page.php?id_eleve=<?= $eleve->id ?>">Modifier</a>
            <a href="delete.php?id_eleve=<?= $eleve->id ?>">Supprimer</a>
        </td>
        </tr>
        <?php }?>
        <!-- if ($alt == "Non") {
           echo "<td><a href='gestion.php?id_alto=".$id."' id='update'>&nbsp&nbsp&nbsp$alt</a></td>";
        }

        else {
            echo "<td><a href='gestion.php?id_altn=".$id."' id='update'>&nbsp&nbsp&nbsp$alt</a></td>";
        }
        echo "<td><a href='gestion.php?id_supp=".$id."' id='delete'>Supprimer</a></td>";
        echo "<td><a href='edit.php?id=".$id."'>Edit</a></td> -->
        </tr>
</table>
</body>