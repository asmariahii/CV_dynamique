<?php
//commentaire1: connexion à la BD
include  "dbase.php";

//commentaire2: récupération des données du formulaire
$p=$_POST['login'];
$n=$_POST['pass'];

//commentaire3: construction de la requête d'insertion dans la table contact ayant les champs: Nom, Prenom, email
$requete = "INSERT INTO users (login,password) VALUES ('$p','$n')";

//echo $requete;
//commentaire4: exécution de la requête d'insertion
$resultat = $mysqli->query($requete) or die ($mysqli->error());
echo "Insertion faite avec succès<br><br>";

?>
<br><br><center><a href="accueil.html">revenir à la page d'accueil</a></center><br>