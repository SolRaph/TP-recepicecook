<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("includes/LoginBDD.php");
$title = "Accueil";
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
            <div class="col-md-10 offset-md-1">
                <h1 class="text-center text-dark mt-5">Crée ta propre recette</h1>
                <div class="card my-5" id="test1234">

<form class="card-body cardbody-color p-lg-5" id="ecriture" method="POST">


    <div class="form-row d-flex justify-content-between">
        <div class="form-group col-md-6" >
            <label for="NameRecette">Nom de la recette</label>
            <input type="text" class="form-control" id="NameRecette" placeholder="Vol au vent de canard">
        </div>
        <div class="form-group col-md-4">
            <label for="NbPers">Nombre de personnes</label>
            <input type="number" class="form-control" id="NbPers" placeholder="4">
        </div>
    </div>
    <div class="form-row d-flex justify-content-between mt-3">
        <div class="form-group col-md-6">
            <label for="inputCity">Ingredients</label>
            <textarea type="text" class="form-control" id="TxtRecipe" 
            placeholder="Canard x1
Carottes x3
Vols au Vent x4
..."></textarea>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Type de Plat</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>Entrées</option>
                <option>Plats</option>
                <option>Desserts</option>
            </select>
        </div>
    </div>
    <div class="form-group col mt-3">
        <label for="TxtRecipe">Description de la recette</label>
        <textarea type="text" class="form-control" id="TxtRecipe" placeholder="ÉTAPE 1
Dégraisser le canard au four, le laisser refroidir puis l'émietter. Réserver.
ÉTAPE 2
Préparer le bouillon de volaille (faire bouillir 1 l d'eau et y ajouter 2 cubes de volaille).
ÉTAPE 3
Éplucher et couper les carottes en petits dés, cuire 20 minutes dans le bouillon de volaille.
ÉTAPE 4
Dans une autre casserole, faire fondre le beurre, ajouter la farine puis délayer au fouet le lait puis 50 cl de bouillon de volaille, jusqu’à obtenir une béchamel.
ÉTAPE 5
Pendant ce temps faire réchauffer les vols au vent au four pendant 15 minutes à 150°C (thermostat 5) en ayant pris soin de découper les chapeaux de pâte au préalable.
ÉTAPE 6
Ajouter le canard, les carottes et les champignons à la béchamel, laisser cuire doucement à feu très doux, saler légèrement et poivrer.
ÉTAPE 7
Servir la préparation dans les vols au vent"></textarea>
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