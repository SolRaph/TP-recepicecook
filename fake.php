<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "Home";
?>


<!DOCTYPE html>
<html lang="fr">
<?php require("includes/head-html.php");?>
<?php include("includes/NavBar.php");?>

<body>
    
    <div class="main-content container">
    <style>
        /* Style pour rendre le bouton rond */
        .bouton-rond {
            display: inline-block;
            border-radius: 50%;
            background-color: #4CAF50; /* Couleur de fond du bouton */
            color: #fff; /* Couleur du texte du bouton */
            padding: 250px 150px; /* Rembourrage du bouton */
            text-align: center;
            margin-left:20rem;
            margin-top:5rem;
            text-decoration: none;
            font-size: 30px;
            cursor: pointer;
        }
    </style>
        <a href="https://www.marmiton.org/" class="bouton-rond">Acceder au Contenu <br>du site</a>
    </div>
</body>
</html>