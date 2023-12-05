<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "create your recipe";

class User{
    public $name;
    public $surname;
    public $email;
    public $password;
    }

    if (!empty($_POST["inscriptionNom"]) && !empty($_POST["inscriptionEmail"]) && !empty($_POST["inscriptionMdp"]) && !empty($_POST["inscriptionConfirmMdp"]) && !empty($_POST["admin"])) {

        // echo("controle");
        $sql ="SELECT * FROM `acces` WHERE `mail`= :inscriptionEmail";
        $query = $db->prepare($sql);
        $query->bindvalue(":inscriptionEmail",$_POST["inscriptionEmail"],PDO::PARAM_STR);
        $query->execute();
        $verifEmail= $query->fetch();
        
            if ($verifEmail === false){
                $InNom = $_POST["inscriptionNom"];
                $InEmail = $_POST["inscriptionEmail"];
                $InMdp = password_hash ($_POST["inscriptionMdp"],PASSWORD_DEFAULT);
                $InConfirmMdp = $_POST["inscriptionConfirmMdp"];
                $InAdmin = $_POST["admin"];

                
            // var_dump('$InNom','$InMdp','$InEmail','$InConfirmMdp','$InAmin');
                if (($_POST['inscriptionMdp']) !== ($_POST['inscriptionConfirmMdp'])) {
                    
                }
                else {
                    $SQL= "INSERT INTO `acces`(`login`, `mail`, `password`, `admin`) VALUES (:inscriptionNom,:inscriptionEmail,:inscriptionMdp,:admin)";
                    $query = $db->prepare($SQL);
                    $query->bindvalue(":inscriptionNom",$InNom,PDO::PARAM_STR);
                    $query->bindvalue(":inscriptionEmail",$InEmail,PDO::PARAM_STR);
                    $query->bindvalue(":inscriptionMdp",$InMdp,PDO::PARAM_STR);
                    $query->bindvalue(":admin",$InAdmin,PDO::PARAM_STR);
                    $query->execute();
                }}
        
        } 

?>



<!DOCTYPE html>
<html lang="en">

    <?php
    require("includes/head-html.php");
    
    ?>
<script type="text/javascript" src="cook.js" defer></script>
<?php include("includes/NavBar.php");?>
<body>
    <div class="main-content container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center text-dark mt-5">Et si on se faisait un Compte ??</h1>
                <div class="card my-5" id="test1234">

                    <form class="card-body cardbody-color p-lg-5" method="POST">

                        <div class="mb-3">
                            <input type="text" class="form-control" id="nom" 
                                placeholder="Loging" name="inscriptionNom">
                        </div>
                        <div class="mb-3">
                            <input type="mail" class="form-control" id="email" 
                                placeholder="Adresse email" name="inscriptionEmail">
                        </div>
                        <div class="mb-3" id="test">
                            <input type="password" id="password" class="form-control" placeholder="Mot de Passe" name="inscriptionMdp">
                            <div >
                                <i class="password-icon" data-feather="eye"></i>
                                <i class="password-icon" data-feather="eye-off"></i>
                            </div>
                                <script src="https://unpkg.com/feather-icons"></script>
                                <script>
                                feather.replace();
                                </script>
                        </div>
                        <div class="mb-3" id ="test">
                            <input type="password" class="form-control" id="password2" placeholder="Confirmation de Mot de Passe" name="inscriptionConfirmMdp">
                            <div >
                                <i class="password-icon" data-feather="eye" id ="oeil2"></i>
                                <i class="password-icon" data-feather="eye-off" id="pasoeil2"></i>
                            </div>
                            <script src="https://unpkg.com/feather-icons"></script>
                            <script>
                            feather.replace();
                            </script>
                        </div>
                        <div class="mb-3" id ="test">
                            <input type="text" class="form-control" id="admin" placeholder="admin?" name="admin">
                        </div>
                                            <?php
                                            if ((($_POST['inscriptionMdp']) !== ($_POST['inscriptionConfirmMdp'])) ){
                                                echo ('<div class="alert alert-danger" role="alert">
                                                les mots de passe ne sont pas identiques.</div>');
                                            }

                                                if ($verifEmail !== false && (!empty($_POST["inscriptionEmail"]))){
                                                    echo ('<div class="alert alert-danger" role="alert">
                                                    bordel change de mail, il est déja pris !!</div>');
                                                }
                                            
                                            ?>
                        <div class="text-center">
                            <button type="submit"class="btn btn-color px-5 mb-5 w-100">Save</button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Tu as deja compte ? <a href="formconnect.php" class="text-dark fw-bold">Connecte toi et ajoute tes propres recettes</a>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</body>
</html>