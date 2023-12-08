<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include("includes/LoginBDD.php");
session_start();
$title = "Mains";
$idrecette = $_GET['id'];
$sql = "SELECT `id` FROM `acces` WHERE `mail` = :idu";
$query = $db->prepare($sql);
$query->bindValue(":idu", $_SESSION["ID-Utilisateur"], PDO::PARAM_STR);
$query->execute();
$controleAdmin = $query->fetch();
$sql = "SELECT * FROM `recipes` WHERE `id-recipe`= $idrecette";
$query = $db->prepare($sql);
$query->execute();
$NameStarters = $query->fetchAll();

$sql = "SELECT ROUND(AVG(note)) FROM `notes` WHERE `id-recette`= :pdosinonCandicerale";
$query = $db->prepare($sql);
$query->bindValue(":pdosinonCandicerale", $idrecette, PDO::PARAM_STR);
$query->execute();
$Moyenne = $query->fetch();
?>




<!DOCTYPE html>
<html lang="en">

<?php
require("includes/head-html.php");

?>

<?php include("includes/NavBar.php"); ?>


<body>

    <div class="main-content container">
        <div class="row">
            <div class="col-md-10 offset-md-1 ">
                <h1 class="text-center text-dark mt-2"><?php
                            foreach ($NameStarters as $NameStarter) {
                                echo ($NameStarter['titre-recette']);
                            } ?></h1>
                <div id="test1234" class="card my-5 p-3">
                    <div class="container text-center ">
                        <div class="row">
                            <div class="col-md-6 ">
                                <?php
                                foreach ($NameStarters as $NameStarter) {
                                    echo ('<img class="img-fluid" src="' . $NameStarter['images'] . '">');
                                } ?>
                            </div>
                            <div class="col-md-6  ">
                                <div class="col-md-8 mb-5 "><strong>nombre de personnes :</strong>
                                    <?php
                                    foreach ($NameStarters as $NameStarter) {
                                        echo ($NameStarter['peoplenumber']);
                                    } ?>
                                    <div>
                                        <?php
                                        foreach ($Moyenne as $Moyennes) {
                                            echo ("<strong>Note moyenne</strong> : " . $Moyennes . "<strong>/5</strong>");
                                        } ?>
                                    </div>
                                </div>

                                <div class="col-md-8  "><strong>Ingredients :</strong><br>
                                    <?php
                                    foreach ($NameStarters as $NameStarter) {
                                        echo ($NameStarter['ingredients&quantité']);
                                    } ?>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3 p-3 "><?php
                                        foreach ($NameStarters as $NameStarter) {
                                            echo ($NameStarter['description']);
                                        } ?></div>
                        </div>
                        <?php
                        $sql = "SELECT * FROM `notes` WHERE `id-user`=:truc AND `id-recette`=:muche";
                        $query = $db->prepare($sql);
                        $query->bindValue(":truc", $controleAdmin['id'], PDO::PARAM_STR);
                        $query->bindValue(":muche", $idrecette, PDO::PARAM_STR);
                        $query->execute();
                        $CandiceTheSupremeLeader = $query->fetch();


                        if ($CandiceTheSupremeLeader["note"] === null) {
                            echo ('<div"><form method="POST"><input name="notes" type="number" min="0" max="5"><button class="btn btn-primary mx-1" type="submit">noter entre 0 et 5</button></form></div>');
                            $sql = "INSERT INTO `notes`(`id-recette`, `id-user`, `note`) VALUES (:muche1,:truc1,:note)";
                            $query = $db->prepare($sql);
                            $query->bindvalue(":note", $_POST["notes"], PDO::PARAM_STR);
                            $query->bindValue(":truc1", $controleAdmin['id'], PDO::PARAM_STR);
                            $query->bindValue(":muche1", $idrecette, PDO::PARAM_STR);
                            $query->execute();
                            header("Refresh:0");
                            
                            
                            
                            // echo($idrecette);
                        } else {
                            echo ("Vous avez déjà noté cette recette ; <br> ");
                            echo (' Vous lui avez donné la note de : ' . $CandiceTheSupremeLeader["note"]);
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>