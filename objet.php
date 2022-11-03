<?php

include 'db.php';

class Eleve {
    public $id;
    public $nom;
    public $prenom;
    public $sexe;
    public $mail;
    public $tel;
    public $specialite;
    public $adresse;
    public $ville;
    public $etude;
    public $alternance;
  
}

function AllEleve(){
    $newBD = newBD();
    $query = $newBD->query('SELECT * FROM eleve');

    $eleves = [];
    while($row = $query->fetch()){
        $eleve = new Eleve();

        $eleve->id = $row['id_eleve'];
        $eleve->lastname = $row['nom_eleve'];
        $eleve->name = $row['prenom_eleve'];
        $eleve->sexe = $row['sexe_eleve'];
        $eleve->mail = $row['mail_eleve'];
        $eleve->tel = $row['tel_eleve'];
        $eleve->special = $row['specialite_eleve'];
        $eleve->loc = $row['adresse_eleve'];
        $eleve->town = $row['ville_eleve'];
        $eleve->etu = $row['etude_eleve'];
        $eleve->alt = $row['altern_eleve'];

        $eleves[] = $eleve;
    }

    return $eleves;
}

function createEleve($eleve)
{
    $dbConnection = newBD();

    $request = $dbConnection->prepare("INSERT INTO eleve VALUES (NULL, :nom, :prenom, :sexe, :mail, :phone, :spec, :loc, :town, :lvl, :alt)");
    return $request->execute([
        ':nom' => $eleve->lastname,
        ':prenom' => $eleve->name,
        ':sexe' => $eleve->sexe,
        ':mail' => $eleve->mail,
        ':phone' => $eleve->tel,
        ':spec' => $eleve->special,
        ':loc' => $eleve->loc,
        ':town' => $eleve->town,
        ':lvl' => $eleve->etu,
        ':alt' => $eleve->alt
    ]);
}

function EditEleve($eleve)
{
    $dbConnection = newBD();

    $request = $dbConnection->prepare("UPDATE eleve SET nom_eleve =?, prenom_eleve =?, sexe_eleve =?, mail_eleve =?, tel_eleve =?, specialite_eleve =?, adresse_eleve =?, ville_eleve =?, etude_eleve =?, altern_eleve =? WHERE id = ?");
    return $request->execute([
        $eleve->lastname,
        $eleve->name,
        $eleve->sexe,
        $eleve->mail,
        $eleve->tel,
        $eleve->special,
        $eleve->loc,
        $eleve->town,
        $eleve->etu,
        $eleve->alt,
        $eleve->id
    ]);
}

function newBD(){
    $host='localhost';
    $port=3306;
    $dbname='annuaire';
    $user='root';
    $pwd='';

    return new PDO("mysql:host=$host;port=$port;dbname=$dbname",$user,$pwd);

}