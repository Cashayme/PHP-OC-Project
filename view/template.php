<!DOCTYPE html>
<html>
<head>
    <title>Billet simple pour l'Alaska - Jean Forteroche</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div class="bg-image"></div>
    <div class="container-fluid">
        <header class="row">
            <nav class="navbar navbar-expand-lg navbar-dark col-12">
                <a class="navbar-brand d-none d-lg-block" href="">Billet simple pour l'Alaska</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/#book">
                            Roman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#author">
                            Auteur
                        </a>
                    </li>
                    <li class="nav-item connexion">
                        <a class="nav-link" href="#"> <i class="fas fa-user"></i> Connexion</a>
                    </li>
                </ul>
            </nav>
        </header>

        <?= $content ?>

        <footer class="row">
            <div id="footer" class="col-12 d-flex flex-row">
                <div class="col-4 footer-content">
                    <a href="">Contacter l'auteur</a>
                </div>
                <div class="col-4 footer-content">Mentions légales</div>
                <div class="col-4 footer-content">Réseaux sociaux</div>
            </div>
        </footer>
    </div>
</body>
</html>