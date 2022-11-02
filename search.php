<?php 

include "db.php";

$safe_value = mysql_real_escape_string($_POST['search']);

$result = mysql_query("SELECT prenom_eleve FROM eleve WHERE `prenom_eleve' LIKE %$safe_value%");
 while ($row = mysql_fetch_assoc($result)) {
echo "<div id='link' onClick='addText(\"".$row['prenom_eleve']."\");'>" . $row['prenom_eleve'] . "</div>";  
 }


  ?>