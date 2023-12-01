<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "Home";
?>



<!DOCTYPE html>
<html lang="en">

    <?php
    require("includes/head-html.php");
    
    ?>

<?php include("includes/NavBar.php");?>
<body>

<div class="main-content">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-5 text-center card " id="recette1">ici la derniere recette</div>
            <div class="col-5 text-center card " id="recette2">ici la recette d'avant</div>
        </div>
    </div>
</div>

</body>
</html>