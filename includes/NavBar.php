<div id="navprime">
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
</div>


<div id="navcolumn">
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


<div id="navblock">
    
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" defer></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" defer></script>



<div class="container-fluid  ">
        <a class="text-dark d-flex" href="index.php"><h3 class="d-flex justify-content-center"><strong>Les Recettes de Timon et Pumba</strong><img src="image/FD/logo.png" width="10%" alt="logo"></h3> </a>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Categories</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="starters.php">Les entrees</a>
                            <a class="dropdown-item" href="mains.php">Les Plats</a>
                            <a class="dropdown-item" href="desserts.php">Les Desserts</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link " href="formconnect.php">Connectez-vous</a></li>
                    <li class="nav-item"><a class="nav-link " href="register.php">Inscrivez-vous</a></li>
                    <li class="nav-item"><a class="nav-link " href="recipes-creation.php">Ajouter votre recette</a></li>
                
                <form class="form-inline ">
                    <input class="form-control mr-sm-2 " name="search"type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2" type="bouton">search</button> 
                </form>
                
            
                </ul>
                <div>
                <a class="navbar-brand" href="LogOut.php"><button type="button" class="btn btn-primary">Log-Out</button></a></div>
            </div>
            
        </nav>
    </div>
</div>

