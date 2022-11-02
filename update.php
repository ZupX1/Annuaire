<?php
include 'db.php';

if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id_eleve']) ? $_POST['id_eleve'] : NULL;
        $lastname = isset($_POST['nom_eleve']) ? $_POST['nom_eleve'] : '';
        $name = isset($_POST['prenom_eleve']) ? $_POST['prenom_eleve'] : '';
        $sexe = isset($_POST['sexe_eleve']) ? $_POST['sexe_eleve'] : '';
        $mail = isset($_POST['mail_eleve']) ? $_POST['mail_eleve'] : '';
        $tel = isset($_POST['tel_eleve']) ? $_POST['tel_eleve'] : '';
        $special = isset($_POST['specialite_eleve']) ? $_POST['specialite_eleve'] : '';
        $loc = isset($_POST['adresse_eleve']) ? $_POST['adresse_eleve'] : '';
        $town = isset($_POST['ville_eleve']) ? $_POST['ville_eleve'] : '';
        $etu = isset($_POST['etude_eleve']) ? $_POST['etude_eleve'] : '';
        $alt = isset($_POST['altern_eleve']) ? $_POST['altern_eleve'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE eleve SET id_eleve = ?, nom_eleve = ?, prenom_eleve = ?, sexe_eleve = ?, mail_eleve = ?, tel_eleve = ?, specialite_eleve = ?, adresse_eleve = ?, ville_eleve = ?, etdue_eleve = ?, altern_eleve = ? WHERE id = ?');
        $stmt->execute([$id, $lastname, $name, $sexe, $mail, $tel, $special, $loc, $town, $etu, $alt, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $newBD->prepare('SELECT * FROM eleve WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>





<div class="content update">
	<h2>Update Contact #<?=$contact['id_eleve']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="1" value="<?=$contact['id']?>" id="id">
        <input type="text" name="name" placeholder="John Doe" value="<?=$contact['name']?>" id="name">
        <label for="email">Email</label>
        <label for="phone">Phone</label>
        <input type="text" name="email" placeholder="johndoe@example.com" value="<?=$contact['email']?>" id="email">
        <input type="text" name="phone" placeholder="2025550143" value="<?=$contact['phone']?>" id="phone">
        <label for="title">Title</label>
        <label for="created">Created</label>
        <input type="text" name="title" placeholder="Employee" value="<?=$contact['title']?>" id="title">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i', strtotime($contact['created']))?>" id="created">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>
