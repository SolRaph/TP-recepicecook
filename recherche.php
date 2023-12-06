<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "recherche";
?>

<!DOCTYPE html>
<html lang="en">
<?php require("includes/head-html.php");?>

<?php include("includes/NavBar.php");?>

<body>
<div class="main-content container">

        <div class="col-md-10 offset-md-1">
            <h1 class="text-center text-dark mt-5">Recherche</h1>
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
                    $search = $_GET['search'];
                    $sql="SELECT `titre-recette` FROM `recipes` WHERE `titre-recette` LIKE '%$search%'";
                        $query = $db->prepare($sql);
                        $query->execute();
                        $recherches = $query->fetchAll();
                        echo("houhou");
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