<?php
include "dbase.php" ;
$requete = "SELECT * FROM contact_inquiry " ;
$resultat = $conn->query($requete) or die ($conn->error()) ;




?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"><head>
    <title>CV de ASMA RIAHI</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="form.css">
</head>
<body>
<form class="form" method="POST"><table >
<tr><td><font color='red'><h1>id</h1></font></td>
<td><font color='red'><h1>nom</h1></font></td></tr>

<?php
while ($ligne=$resultat->fetch_assoc()) {?>
	<tr><td><h3><?php echo $ligne['id']?><h3></td>
	<td><h3><?php echo $ligne['fname']?><h3></td>
        
	<td><a href ="details.php?id=<?php echo $ligne['id']?>"><h4>details</h4></td>
    <td><a href ="supprimer.php?id=<?php echo $ligne['id']?>"><h4>Supprimer</h4></td>
	<td><a href ="Modif.php?id=<?php echo $ligne['id']?>"><h4>Modifier</h4></td></tr>
<?php
}
?>

</table>
</form>
</body>
<br><br><center><a href="contact.php">retour</a></center><br>
</html>