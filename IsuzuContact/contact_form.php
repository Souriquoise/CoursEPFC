<?php 
$bdd = new PDO('mysql:host=localhost;dbname=isuzu;charset=utf8', 'root', 'root');

$query = $bdd->query('SELECT * FROM communes');
$record= $query->fetchAll(); 
?>

<html>
    <head>
        <title> Formulaire de contact </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    </head>

    <body>
        <div>
            <h1> Formulaire de contact </h1>
            <Form method="post" action="contact_controler.php">
                <label for="email"> Votre email : </label><input type="email" name="email" id="email" placeholder="ex: jdubois@hotmail.com"><br/><br/>
                <label for="nom"> Votre nom : </label><input type="text" name="nom" id="nom" placeholder="ex: Dubois"><br/><br/>
                <label for="prenom"> Votre prénom : </label><input type="text" name="prenom" id="prenom" placeholder="ex: Jean"><br/><br/>
                <label for="tel"> Votre numéro de téléphone : </label><input type="tel" name="tel" id="tel" placeholder="ex: 0485 17 89 56"><br/><br/>
                <label for="commune"> Dans commune habitez-vous ?</label><br />
                <select name="commune" id="commune">
                    <?php foreach($record as $commune) { 
                     echo "<option value=".$commune['nom'].">".$commune['nom']."</option>";
                    } ?></select><br/><br/>
                <label for="commentaire"> Commentaire: </label><br /><textarea rows="4" cols="50" name="commentaire" id="commentaire">Un petit mot ?</textarea>
                <input type="submit" value="ok">
            </Form>


        </div>
    </body>

</html>
