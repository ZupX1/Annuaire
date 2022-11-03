<?php
require_once 'objet.php';

$eleve = findEleve($_GET['id_eleve']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <title>Document</title>
</head>
    <body id="cont">
      <nav class="ong">
        <div class="onglets">
          <a href="form.html">Formulaire d'inscription</a>
            <a href="gestion.php">Voir les inscriptions</a>
        </div>
      </nav>
        <div class="container">
          <form method="post" action="edit.php?id_eleve=<?= $eleve->id ?>">
            <label for="name">Nom</label>
            <input
              type="text"
              id="nom"
              value="<?= $eleve->lastname ?>"
              name="nom"
              placeholder="Nom..."
            />
        
            <label for="name">Prénom</label>
            <input
              type="text"
              id="prenom"
              value="<?= $eleve->name ?>"
              name="prenom"
              placeholder="Prénom..."
            />
       
            <label for="genre">Sexe</label>
            <select id="sexe" name="sexe" value="<?= $eleve->sexe?>">
              <option value="" disabled selected value id="none" hidden>---------------</option>
              <option value="Homme">Homme</option>
              <option value="Femme">Femme</option>
              <option value="autres">Autre</option>
            </select>

            <label for="mail">Adresse mail</label>
            <input
              type="text"
              id="mail"
              value="<?= $eleve->mail ?>"
              name="mail"
              placeholder="Adresse mail..."
            />
       
            <label for="phone">Numéro de télephone</label>
            <input type="tel" id="phone" value="<?= $eleve->tel ?>" name="phone" pattern="[0-9]{10}">
    
            <label for="spec">Spécialité souhaitée</label>
            <select id="spec" value="<?= $eleve->special ?>" name="spec">
              <option value="" disabled selected value id="none" hidden>---------------</option>
              <option value="Developpeur Web">Developpeur Web</option>
              <option value="Communication Graphique">Communication Graphique</option>
              <option value="Community Manager">Community Manager</option>
              <option value="Marketing">Marketing</option>
            </select>

            <label for="loc">Adresse</label>
            <input
              type="text"
              id="loc"
              value="<?= $eleve->loc ?>"
              name="loc"
              placeholder="Adresse..."
            />
    
            <label for="town">Ville</label>
            <input
              type="text"
              id="town"
              value="<?= $eleve->town ?>"
              name="town"
              placeholder="Ville..."
            />

            <label for="lvl">Niveau d'étude</label>
            <select id="lvl" name="lvl" value="<?= $eleve->etu?>">
              <option value="" disabled selected value id="none" hidden>---------------</option>
              <option value="Baccalaureat">Baccalauréat</option>
              <option value="BTS/DUT">BTS/DUT</option>
              <option value="License">License</option>
              <option value="Master">Master</option>
              <option value="Doctorat">Doctorat</option>
            </select>

            <label for="alt">Alternance?</label>
            <select id="alt" name="alt" value="<?= $eleve->alt ?>">
              <option value="" disabled selected value id="none" hidden>---------------</option>
              <option value="Oui">Oui</option>
              <option value="Non">Non</option>
            </select>

            <input type="submit" value="Submit" />
          </form>
</body>
</html>