<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "Mains";
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
            <h1 class="text-center text-dark mt-5">Mains</h1>
            <div id="test1234" class="card my-5">
            <div class="container text-center ">
                <div class="row ">
                    <div class="col">
                    <h2>Name</h2>
                    </div>
                    <div class="col">
                    <h2>Pics</h2>
                    </div>
                    
                </div>
            </div>
            <br>
            <div class="container text-center">
                <div class="row align-items-center mt-2">
                <?php
                    #recherche dans les recettes de TOUTES les entrees
                    $sql = 'SELECT`titre-recette`, `images`,`id-recipe`FROM `recipes` WHERE `etat`=:etat AND `category`=:categorie';
                    $query = $db->prepare($sql);
                    $query->bindvalue(":etat","ok",PDO::PARAM_STR);
                    $query->bindvalue(":categorie","Mains",PDO::PARAM_STR);
                    $query->execute();
                    $NameStarters = $query->fetchAll();
                    foreach ($NameStarters as $NameStarter) { 
                        echo('<div class="col-md-6 mb-3 "><a style="color:black" href="afficheRecette.php?id='.$NameStarter['id-recipe'].'">'.$NameStarter['titre-recette'].'</div><div class="col-md-6 mb-3 "><img width="100px" src="'.$NameStarter['images'].'"></div>');
                    }
                    ?>
                    
                    
                </div>
            </div>
        </div>

</div>
<?php
include("includes/footer.php");
        ?>

</body>
</html>