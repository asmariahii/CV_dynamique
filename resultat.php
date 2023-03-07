<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"><head>
    <title>CV de Yassine Ben Turkya</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="Formulaire1.CSS">
</head>
<body>
<?php

include  "dbase.php";

$n=$_POST['Nom'];
$e=$_POST['Email'];
$m=$_POST['Message'];

$r = "INSERT INTO cv (Nom,Email,Message) VALUES ('$n','$e','$m');";

$resultat = $mysql->query($r) or die ($mysql->error());
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
    
}
</style>
 <p>Insertion avec succée</p>';
echo "<br>"?>;
<tr><td><a href ="Formulaire1.html"><center><div class="hello " >Retour</div></center></td></tr></a>