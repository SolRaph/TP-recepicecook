<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" defer></script>

    <title><?php echo $title ?></title>
</head>


<body>


    <nav class="navbar navbar-expand-md navbar-dark bg-primary">


        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Cours</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">HTML et CSS</a>
                        <a class="dropdown-item" href="#">JavaScript</a>
                        <a class="dropdown-item" href="#">PHP et MySQL</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link " href="#">Articles</a></li>
                <li class="nav-item"><a class="nav-link " href="#">Contact</a></li>
            </ul>
            <form class="form-inline  d-flex ">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

</body>

</html>