<div id="nav">
<nav class="navbar navbar-inverse navbar-global">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="pageadmin.php"><button type="button" class="btn btn-primary">Hakuna-Matata</button></a>
        </div>
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="image/FD/logo.png" width="30px" alt="logo"> Les Recettes de Timon et Pumba</a>
        </div>
        <div class="navbar-header">
            <a class="navbar-brand" href="LogOut.php"><button type="button" class="btn btn-primary">Log-Out</button></a>
        </div>

    </div>
</nav>

<nav class="navbar-primary d-flex flex-column justify-content-between">
    
    <div>
        <ul class="navbar-primary-menu" id="nav1">
            <li>
                <a href="starters.php"><span class="glyphicon glyphicon-cog"></span><span class="nav-label">Les Entrées</span></a>
                <a href="mains.php"><span class="glyphicon glyphicon-film"></span><span class="nav-label">Les Plats</span></a>
                <a href="desserts.php"><span class="glyphicon glyphicon-calendar"></span><span class="nav-label">Les desserts</span></a>
                <a href=""><span class="glyphicon glyphicon-calendar"></span><span class="nav-label">Search your recipe :</span></a>
                <form method="GET" action="recherche.php">
                    <input class="mx-1" type="text" name="search">
                    <button class="btn btn-primary mx-5 mt-1" type="bouton">search</button>
                </form>
            </li>
        </ul>
    </div>
    <div>
        <ul class="navbar-primary-menu" id="nav2">
            <li>
                <a href="formconnect.php"><span class="glyphicon glyphicon-list-alt"></span><span class="nav-label">Connectez-vous</span></a>
                <a href="register.php"><span class="glyphicon glyphicon-envelope"></span><span class="nav-label">Inscrivez vous</span></a>
                <a href="recipes-creation.php"><span class="glyphicon glyphicon-envelope"></span><span class="nav-label">Ajouter votre recette</span></a>
            </li>
        </ul>

    </div>


</nav>

</div> 
