<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"><head>
    <title>CV asma riahi</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="Formulaire1.CSS">
</head>
<body>
<?php include "dbase.php";
$requete = "DELETE FROM contact_inquiry where id=".$_GET['id'] ;
$resultat = $conn->query($requete) or die ($conn->error()) ;

echo'<style>
p{
    display: block;
    text-align: center;
    padding: 10px;
    margin: 10px  500px ;
    color: #fff;
    background-color: #EA0;
    box-shadow: 0px 0px 10px #ccc;
    border-radius: 5px;
    font-size:18px;
    
}
</style> 
<p><br><br>suppression faite avec succès</p>';
echo '<tr><td><a href ="afficher.php">'?>
<tr><td><a href ="afficher.php"><center><div class="hello " >Retour</div></center></td></tr></a>
