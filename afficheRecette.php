<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "Mains";
$idrecette = $_GET['id'];
$sql = "SELECT * FROM `recipes` WHERE `id-recipe`= $idrecette";
                    $query = $db->prepare($sql);
                    $query->execute();
                    $NameStarters = $query->fetchAll();
?>




<!DOCTYPE html>
<html lang="en">

    <?php
    require("includes/head-html.php");
    
    ?>

<?php include("includes/NavBar.php");?>
<body>

<div class="main-content container">
    <div class="row">
        <div class="col-md-10 offset-md-1 ">
            <h1 class="text-center text-dark mt-2"><?php
                        foreach ($NameStarters as $NameStarter) { 
                        echo($NameStarter['titre-recette']);
                    } ?></h1>
            <div id="test1234" class="card my-5 p-3">
                <div class="container text-center ">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                        foreach ($NameStarters as $NameStarter) { 
                        echo('<img width="400px" src="'.$NameStarter['images'].'">');
                    } ?>
                            </div>
                        <div class="col-md-6 ">
                                <div class="col-md-8 mb-5">nombre de personnes : 
                                <?php
                        foreach ($NameStarters as $NameStarter) { 
                        echo($NameStarter['peoplenumber']);
                    } ?>
                                </div>
                                <div class="col-md-8 "><?php
                        foreach ($NameStarters as $NameStarter) { 
                        echo($NameStarter['ingredients&quantité']);
                    } ?>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3 p-3"><?php
                        foreach ($NameStarters as $NameStarter) { 
                        echo($NameStarter['description']);
                    } ?></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>