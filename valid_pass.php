<?php 
//commentaire 1: se connecter à la BD
include  "connexion.php";

//commentaire2: récupération des données du formulaire
$log=$_POST['login'];

//commentaire 3: construire la reqûete
$requete = "SELECT * FROM users WHERE login ='$log'";

//commentaire 4: exécution de la reqûete
$resultat = $mysqli->query($requete) or die ($mysqli->error());

//commentaire 5: vérification du résultat retourné
if($ligne = $resultat->fetch_assoc())
		echo "Votre mot de passe est: ".$ligne['password'];
else echo "compte inexistant, vous devez vous inscrire <a href='inscription.html'>S'inscrire</a>";
?>
</table>
<br><br><center><a href="accueil.html">revenir à la page d'accueil</a></center><br>