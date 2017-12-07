<?php
 


$bdd = new PDO('mysql:host=localhost;dbname=isuzu;charset=utf8', 'root', 'root');
     

$response=$bdd->prepare("INSERT INTO clients (email, nom, prenom, telephone, commune, commentaire)VALUES (:email, :nom, :prenom, :telephone, :commune, :commentaire)");
$response->bindValue(':email', htmlspecialchars($_POST["email"]));
$response->bindValue(':nom', htmlspecialchars($_POST["nom"]));
$response->bindValue(':prenom', htmlspecialchars($_POST["prenom"]));
$response->bindValue(':telephone',htmlspecialchars($_POST["tel"]));
$response->bindValue(':commune', $_POST["commune"]);
$response->bindValue(':commentaire', nl2br(htmlspecialchars($_POST["commentaire"])));
$execute = $response->execute();


if ($execute){
    echo "Votre formulaire a bien été envoyé. Merci!";
}
else {
    echo "Oooops! Erreur...";  
}

?>
