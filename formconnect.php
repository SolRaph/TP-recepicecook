<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "Connect";

if (!empty($_POST["adressMail"]) && !empty($_POST["Mdp"])) {
    


    // echo("testvideouplein");
    $sql = "SELECT * FROM `acces` WHERE `mail` = :adresseMail";
    $query = $db->prepare($sql);
    $query->bindValue(":adresseMail", $_POST["adressMail"], PDO::PARAM_STR);
    $query->execute();
    $controleID = $query->fetch();
    // echo($controleID);
    $hash = $_POST["Mdp"];


    $controleMdp = password_verify($hash,$controleID["password"]);
    // echo($controleMdp);


    if ($controleID !== false && $controleMdp !== false) {
        // echo("le mail existe <br>");
        // echo($controleID["mdp"]);
        echo("Le mail et le mot de passe correspondent, bienvenu");
        header("location:index.php");
        session_start();
        $_SESSION['ID-Utilisateur'] = $_POST["adressMail"];
    }


}
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
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Connecte toi</h2>
                <div id="test1234" class="card my-5">

                    <form class="card-body cardbody-color p-lg-5" method="POST">
                    
                        <div class="mb-3">
                            <input type="email" class="form-control" id="Username" aria-describedby="emailHelp"
                                placeholder="Adresse email" name="adressMail">
                        </div>
                        <div class="mb-3" id="test">
                            <input type="password" id="password" class="form-control" placeholder="Mot de Passe" name="Mdp">
                                <i class="password-icon" data-feather="eye" id ="oeil2"></i>
                                <i class="password-icon" data-feather="eye-off" id="pasoeil2"></i>
                            </div>
                            <script src="https://unpkg.com/feather-icons"></script>
                            <script>
                            feather.replace();
                            </script>
                        </div>
                        <?php
                            if ($controleID !== false) {

                                if ($controleMdp !== false) {
                                
                                }
                                else {
                                    echo ('<div class="alert alert-danger" role="alert">
                                    Mot de passe incorrect!</div>');
                                }

                            }
                            else {
                            
                                echo '<div class="alert alert-danger" role="alert">
                                Attention, votre adresse mail ne correspond à aucun compte connu. Veuillez verifier ou creer un nouveau compte</div>';
                            }
                        ?>
                        <div class="text-center"><button type="submit"
                                class="btn btn-color px-5 mb-5 w-100">connexion</button></div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Pas encore de compte ? <a href="register.php" class="text-dark fw-bold"> Créer un compte !</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
</div>

</body>
</html>