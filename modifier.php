<?php include "dbase.php";

$requete = "SELECT * FROM utilisateur WHERE id=".$_GET['identifiant'];
$resultat = $mysqli ->query($requete) or die ($mysqli->error());

$ligne = $resultat->fetch_assoc();

?>


<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>	</head><body>
<form action="resultat.php" method="post">
<table align="center">
<tr><td>Entrez votre prénom: </td><td><input type="text" name="prenom" value="<?php echo $ligne["prenom"]; ?></td></tr> 
<tr><td>Entrez votre nom: 	 </td><td><input type="text" name="nom" value="<?php echo $ligne["nom"]; ?> </td></tr>
<tr><td>Entrez votre email:  </td><td><input type="email" name="email" value="<?php echo $ligne[email"]; ?></td></tr> 

						 
								 




<br><br>


<center><a href="affiche.php">liste utilisateurs</a></center>


</body></html>