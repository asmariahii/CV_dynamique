<?php include "dbase.php";

$requete = "SELECT * FROM utilisateur WHERE id=".$_GET['identifiant'];
$resultat = $conn ->query($requete) or die ($conn->error());

$ligne = $resultat->fetch_assoc();

?>
<div class="container">

    <form action="" method="post">
        <label for="fname">Nom :</label>
        <input type="text" id="fname" name="fname" placeholder="Nom de famille">

        <label for="lname">Prénom :</label>
        <input type="text" id="lname" name="lname" placeholder="Prénom">

        <label for="email">Email :</label>
        <input type="text" id="email" name="email" placeholder="Adresse e-mail">

        <label for="subject">Sujet du Message :</label>
        <input type="text" id="subject" name="subject" placeholder="sujet">

        <label for="message">Message :</label>
        <textarea id="message" name="message" placeholder="message" style="height:200px"></textarea>

        <input type="submit" name="submit" value="Submit">
        <input type="submit" name="retour" value="Retour">
    </form>

</div>
<center><a href="afficher.php">RETOUR</a></center>