<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "Desserts";
?>



<!DOCTYPE html>
<html lang="en">

    <?php
    require("includes/head-html.php");
    
    ?>

<?php include("includes/NavBar.php");?>
<body>

<div class="main-content container">

        <div class="col-md-10 offset-md-1">
            <h1 class="text-center text-dark mt-5">Desserts</h1>
            <div id="test1234" class="card my-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                    <h3>Name</h3>
                    </div>
                    <div class="col">
                    <h3>Pics</h3>
                    <img src="" alt="" srcset="" width>
                    </div>
                    
                </div>
            </div>
            <br>
            <div class="container text-center">
                <div class="row ">
                    <div class="col-md-6">
                    <?php
                    #recherche dans les recettes de TOUTES les entrees
                    $sql = "SELECT  `titre-recette`FROM `recipes` WHERE `category`= 'Desserts'";
                    $query = $db->prepare($sql);
                    $query->execute();
                    $NameStarters = $query->fetchAll();
                    foreach ($NameStarters as $NameStarter) { 
                        echo($NameStarter['titre-recette'].'<br><br>');
                    }
                    ?>
                    </div>
                    <div class="col-md-6">
                    <?php
                    #recherche dans les recettes de TOUTES les entrees
                    $sql = "SELECT  `images` FROM `recipes` WHERE `category`= 'Desserts'";
                    $query = $db->prepare($sql);
                    $query->execute();
                    $images = $query->fetchAll();
                    foreach ($images as $image) { 
                        echo("<img width='75px' src='".$image['images']."'");
                    
                    }
                    ?>
                    </div>
                    
                    
                </div>
            </div>
        </div>
</div>


</body>
</html>