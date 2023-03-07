<head>
    <title>formulaire de contac</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="contact.css">
</head>

<?php require_once 'dbase.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h3> Formulaire de Contact </h3>

<div class="container">

    <form action="" method="post">
        <label for="fname">Nom :</label>
        <input type="text" id="fname" name="fname" placeholder="Nom de famille">

        <label for="lname">Prénom :</label>
        <input type="text" id="lname" name="lname" placeholder="Prénom">

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Adresse e-mail">

        <label for="subject">Sujet du Message :</label>
        <input type="text" id="subject" name="subject" placeholder="sujet du message">

        <label for="message">Message :</label>
        <textarea id="message" name="message" placeholder="message" style="height:90px"></textarea>

        <input type="submit" name="submit" value="Submit">

        <input type="submit" name="cancel" value="cancel">
    </form>

</div>
<center><a href="moncv.php">RETOUR</a></center>
<center><a href="afficher.php">AFFICHER</a></center>


</body>
</html>

<?php
if (!empty($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_inquiry (fname, lname, email, subject, message) 
            values ('$fname', '$lname', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)){
        echo "
        Nouvel enregistrement ajouté avec succès";
    }else{
        echo "Error : ". $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


}


?>