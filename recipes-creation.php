<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "Accueil";
session_start();
// echo($_SESSION["ID-Utilisateur"]."<br>");


if ($_SESSION["ID-Utilisateur"]===null) {
    header("location:formconnect.php");
} else {
    
    #controle que tout soit remplis
    if ((!empty($_POST["NameRecette"]))&& !empty($_POST["NbPers"])&& !empty($_POST["cxplat"])&& !empty($_POST["inputingredients"])&& !empty($_POST["quantity"])&& !empty($_POST["image"])&& !empty($_POST["TxtRecipe"])){
        echo('ok');

        #REQUETTE SQL POUR INSERER DANS RECIPES
        $SQL="INSERT INTO `recipes`(`images`, `titre-recette`, `peoplenumber`, `description`, `category`) VALUES (:images, :titreRecette, :peoplenumber, :descriptions, :category )";
        $query = $db->prepare($SQL);
        $query->bindvalue(":images",$_POST["image"],PDO::PARAM_STR);
        $query->bindvalue(":titreRecette",$_POST["NameRecette"],PDO::PARAM_STR);
        $query->bindvalue(":peoplenumber",$_POST["NbPers"],PDO::PARAM_STR);
        $query->bindvalue(":descriptions",$_POST["TxtRecipe"],PDO::PARAM_STR);
        $query->bindvalue(":category",$_POST["cxplat"],PDO::PARAM_STR);
        $query->execute();
        echo("test1");

        #recuperation de l'ID Recette
        $sql = "SELECT `id-recipe` FROM `recipes` WHERE `titre-recette`= :IdTitreRecette";
        $query = $db->prepare($sql);
        $query->bindvalue(":IdTitreRecette",$_POST["NameRecette"],PDO::PARAM_STR);
        $query->execute();
        echo("test2");
        $controleID = $query->fetchAll();
        foreach ($controleID as $ligne) { 
            echo($ligne["id-recipe"].'<br>');

        }



        #REQUETTE SQL POUR INSERER DANS INGREDIENTS
        $sql1="INSERT INTO `ingredients`( `ingredients`, `quantity`, `id-r`) VALUES (:ingredients, :quantity, :idr)";
        $query = $db->prepare($sql1);
        $query->bindvalue(":ingredients",$_POST["inputingredients"],PDO::PARAM_STR);
        $query->bindvalue(":quantity",$_POST["quantity"],PDO::PARAM_STR);
        $query->bindvalue(":idr",$ligne["id-recipe"],PDO::PARAM_STR);
        $query->execute();
        
    };

    // Traitement du formulaire lorsque soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des ingrédients depuis le formulaire
    $ingredients = $_POST['inputingredients'];

    // Boucle pour insérer chaque ingrédient dans la base de données
    foreach ($ingredients as $ingredient) {
        // Utilisation de requêtes préparées pour éviter les problèmes d'injection SQL
        $stmt = $conn->prepare("INSERT INTO `ingredients` (`ingredients`) VALUES (:ingredients)");
        $stmt->bind_param("s", $ingredient);
        $stmt->execute();
        $stmt->close();
    }

    echo "Ingrédients ajoutés avec succès !";
}


?>





<!DOCTYPE html>
<html lang="en">

    <?php require("includes/head-html.php");?>
    <?php include("includes/NavBar.php");?>
<body>

<div class="main-content container">
<div class="row">
            <div class="col-md-10 offset-md-1">
                <h1 class="text-center text-dark mt-5">Crée ta propre recette</h1>
                <div class="card my-5" id="test1234">

<form class="card-body cardbody-color p-lg-5" id="ecriture" method="POST">


    <div class="form-row d-flex justify-content-between">
        <div class="form-group col-md-5" >
            <label for="NameRecette">Nom de la recette</label>
            <input type="text" class="form-control" name="NameRecette" placeholder="Vol au vent de canard">
        </div>
        <div class="form-group col-md-3">
            <label for="NbPers">Nombre de personnes</label>
            <input type="number" class="form-control" name="NbPers" placeholder="4">
        </div>
        <div class="form-group col-md-3">
            <label for="cxplat">Type de Plat</label>
            <select name="cxplat" id="choix" class="form-control"class="form-control">
                <option>Choose...</option>
                <option value="Starters">Entrées</option>
                <option value="Mains">Plats</option>
                <option value="Desserts">Desserts</option>
            </select>
        </div>

    </div>
    <div class="form-row d-flex mt-3 ">
        
            <div class="form-group col-md-3">
                <label for="inputingredients">Ingredients</label>
                <input name="inputingredients" type="text" class="form-control" placeholder="Canard">
            </div>
            <div class="form-group col-md-3 px-4">
                <label for="quantity">Quantitées</label>
                <input name="quantity" type="number" class="form-control" placeholder="1">
            </div>
            <div class="form-group col-md-3 pt-4">
                <button type="button" class="btn btn-outline-info rounded-circle align-bottom" onclick="nouveauInput()" value="Ajouter une proposition">+</button>
            </div>
            <div class="form-group col-md-3">
                <label for="image">Ajouter une Photo</label>
                <input name="image" type="text" class="form-control" placeholder="URL de la photo ">
            </div>
            
    </div>
    <div id="nouveau_input"></div>
    

    <!-- scripte JS pour ajouter des inputs ingredients -->
    <script type="text/javascript">
    let contenu = ""

    function nouveauInput() {

    contenu = contenu + '<div class="form-row d-flex mt-3 "><div class="form-group col-md-3"><input type="text" class="form-control" placeholder="Vol au vent"></div><div class="form-group col-md-3 px-4"><input type="number" class="form-control" placeholder="4"></div><div class="form-group col-md-3 "><button type="button" class="btn btn-outline-info rounded-circle align-bottom" onclick="nouveauInput()" value="Ajouter une proposition">+</button></div></div>';
    document.getElementById('nouveau_input').innerHTML = contenu;}

    </script>

                        <div class="form-group col mt-3">
                            <label for="TxtRecipe">Description de la recette</label>
                            <textarea type="text" class="form-control" name="TxtRecipe" placeholder="ÉTAPE 1 :
Dégraisser le canard au four, le laisser refroidir puis l'émietter. Réserver."></textarea>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit"class="btn btn-color px-5 mb-5 w-100">Save</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
</div>
</body>
</html>

<?php

}
?>