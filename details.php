
<?php
include "dbase.php" ;

$requete = "SELECT * FROM contact_inquiry WHERE id=".$_GET['id'] ;
$resultat = $conn->query($requete) or die ($conn->error()) ;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"><head>
    <title>details</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="Form.css">
</head>
<body>
<form class="lll" method="POST">
<table align='center'>
<br><br><table class="table"><tr><td><font color='red'><h1>id</h1></font></td>
<td><font color='red' ><h1>Nom_Prenom</h1></font></td>
<td><font color='red'><h1>Email</h1></font></td>
<td><font color='red'><h1>Message</h1></font></td></tr>


<?php while ($ligne=$resultat->fetch_assoc()) {?>
	<tr><td><h3><?php echo $ligne['id']?></h3></td>
	<td><h3><?php echo $ligne['fname']?></h3></td>
	<td><h3><?php echo $ligne['email']?></h3></td>
	<td><h3><?php echo $ligne['message']?></h3></td></tr>
	<td><h4><a href ="supprimer.php?id=<?php echo $ligne['id']?>">Supprimer</td></tr>
	
<?php
}
?>
<tr><td><a href ="afficher.php"><center><div class="hello " >Retour</div></center></td></tr></a>