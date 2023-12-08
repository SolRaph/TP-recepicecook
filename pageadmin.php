<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "admin";
$etat = "admin"; 
session_start();
$sql = "SELECT `type` FROM `acces` WHERE `mail` = :idu";
    $query = $db->prepare($sql);
    $query->bindValue(":idu", $_SESSION["ID-Utilisateur"], PDO::PARAM_STR);
    $query->execute();
    $controleAdmin = $query->fetch();
if ($controleAdmin["type"] === $etat) {

?>   


<!DOCTYPE html>
<html lang="en">

<?php require("includes/head-html.php");?>

<?php include("includes/NavBar.php");?>
<body>
    <div class="main-content container ">
        <div class="row">
            <div class="col-md-10 offset-md-1 mb-5">
                <h1 class="text-center text-dark mt-2">Recette en attente d'approbation</h1>
            </div> 
        </div>
        <?php
 $sql = "SELECT * FROM `recipes` WHERE `etat`='attente'";  
        $query = $db->prepare($sql);
                    $query->execute();
                    $attentes = $query->fetchAll();
                    foreach ($attentes as $attente)
        
        ?>
        <div id="test1234" class="card my-5 p-3">
            <div class="row">
                <div class="col-md-5 offset-md-1 mt-3"><?php                        
                            echo('<img width="200px" src="'.$attente['images'].'">');
            ?></div>
                <div class="col-md-5 offset-md-1 mt-5"><?php                        
                            echo($attente['titre-recette']);
            ?></div>
            </div>
            <div class="row">
                <div class="col-md-5 offset-md-1 mt-3">Pour : <?php                        
                            echo($attente['peoplenumber']);
            ?> Personnes</div>
                <div class="col-md-5 offset-md-1"><strong>Ingrédients</strong> : <br><?php                        
                            echo($attente['ingredients&quantité']);
            ?></div>
            </div>
            <div class="row">
                <div class= "col md-10 offset-md-1 mb-5"><strong>Étapes :</strong><br><?php                        
                            echo($attente['description']);
            ?></div>
            </div>
        </div>
            <form id="bouton" method="POST">
                <div class="row">
                    <div class="col-md-5 offset-md-1"> <input value="valider" type="submit" name="yes"></input></div> 
                    <div class="col-md-5 offset-md-1"> <input value="refuser" type="submit" name="no"></input></div>    
                </div> 
                <?php 
                if (isset ($_POST["yes"])) {
    $sql="UPDATE `recipes` SET `etat`='ok' WHERE `id-recipe`=:etat";
    $query = $db->prepare($sql);
    $query->bindvalue(":etat",$attente['id-recipe'],PDO::PARAM_STR);
    $query->execute();
    header("Location: pageadmin.php"); 

}
                elseif (isset ($_POST["no"])) {
    $sql2="DELETE FROM `recipes` WHERE `id-recipe`=:etat";
    $query =$db->prepare($sql2);
    $query->bindvalue(":etat",$attente['id-recipe'],PDO::PARAM_STR);
    $query->execute();
    header("Location: pageadmin.php");
}                  
            ?>   
            </form>
    </div>
    
</body>
</html>
<?php
}


else {
        ?>
    <!DOCTYPE html>
<html lang="en">

<?php require("includes/head-html.php");?>

<?php include("includes/NavBar.php");?>
<body>
    <div class="main-content container ">
        <div class="row">
            <div class="col-md-10 offset-md-1 mb-5">
                <h1 class="text-center text-dark mt-2">Vous n'etes pas admin</h1>
            </div> 
        </div>
        <?php       
}
?>