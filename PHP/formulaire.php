<?php

if(isset($_POST["nom"]) && isset($_POST["prenom"])){
    if(!empty($_POST["nom"]) && !empty(["prenom"])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        echo 'votre nom est' .$nom. 'et votre prenom est' .$prenom;
    }

    else{
        $nom = $_POST["nom"];
        echo "les champs nom et prenom sont vides";
    }
}
?>

<!Doctype html>
<head>
<meta charset="UTF8">

<title>Formulaire</title>

<link href="formulaire.css" rel="stylesheet" />

</head>

<body bgcolor="yellow">
<center>

<p>


<form action="" method="POST">

<fieldset>
    <legend align="center">Formulaire d'inscription</legend>


<label for="nom">  Entrez votre nom : </label> 
<input type= "text" name = "nom">

</br>
</br>

<label for="prenom " > Entrez votre prenom : </label>
<input type= "text" name ="prenom">


</fieldset>

<button type="submit">  Valider </button>
</form>
</p>
</center>
</body>
</html>