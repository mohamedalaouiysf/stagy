
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="nav2 fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <img src="img/logo.png" class="img-fluid" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#offres">Offres de stage</a>
                    </li>
                    <li class="nav-item rdv">
                        <a class="nav-link" href="#partenaires">Nos partenaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/instructor-explaining-corporate-software-specific-intern.jpg" height="600px" alt="First slide">
                <div class="carousel-caption d-none  d-md-block ft">
                    <h2 class="lbg">Votre stage </h2>
                    <h2 class="dbg">est notre Priorité</h2>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="img/factory-worker-explaining-trainee-how-operate-industrial-machine-using-new-software-touch-screen-computer.jpg" height="600px" alt="Second slide">
                <div class="carousel-caption d-none  d-md-block">
                    <h2 class="lbg">STAGE </h2>
                    <h2 class="dbg"> OPERATIONNEL!</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/business-job-interview-concept.jpg" height="600px" alt="Third slide">
                <div class="carousel-caption d-none  d-md-block">
                    <h2 class="lbg">STAGE</h2>
                    <h2 class="dbg"> PRE-EMBAUCHE!</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/business-people-handshake-greeting-deal-at-work.jpg" height="600px" alt="Third slide">
                <div class="carousel-caption d-none  d-md-block">
                    <h2 class="lbg">STAGE</h2>
                    <h2 class="dbg">FIN D'ETUDES(PFE)!</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row stat">
        <div class="col-md-4 text-center">
            <span id="count" class="count">200</span>
            <h4>Offres de stage</h4>
        </div>
        <div class="col-md-4 text-center">
            <span id="count2" class="count">500</span>
            <h4>Entreprises</h4>
        </div>
        <div class="col-md-4 text-center">
            <span id="count3" class="count">786</span>
            <h4>Partenaires</h4>
        </div>
    </div>
    <div class="offre">
        <div class="search container-fluid">
            <h4 align=center>Cherchez vous un stage?</h4>
            <div class="row container-fluid">
                <div class="col-md-4">
                    <select class="form-control margy">
                        <option>Domaine</option>
                        <option>Informatique/ Réseaux/ Télécoms</option>
                        <option>Import/ Export/ Commerce</option>
                        <option>Direction générale</option>
                        <option>Distribution/ Logistique/ Transport</option>
                        <option>Commercial/ Vente</option>
                        <option>Comptabilité/ Finance/ Audit</option>
                        <option>Administration/ Secrétariat</option>
                        <option>Internet/ E-commerce/ E-reputation</option>
                        <option>Juridique/ Droit</option>
                        <option>Marketing/ Communication/ Publicité</option>
                        <option>Organisation/ Gestion/ Stratégie</option>
                        <option>Recherche & Développement</option>
                        <option>Évenementiel</option>
                        <option>Système d'information </option>
                        <option>Qualité/ Production</option>
                        <option>Ressources Humaines</option>
                        <option>Services Généraux</option>
                        <option>Tourisme/ Hôtellerie/ Restauration</option>
                        <option>Maintenance/ Réparation</option>
                        <option>Enseignement /Formation /Education</option>
                        <option>Art graphique/ Photographie/ Son</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-control margy">
                        <option>Type</option>
                        <option>Observation</option>
                        <option>Opérationnel</option>
                        <option>En alternance</option>
                        <option>Fin d'études</option>
                        <option>Pré-embauche</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-control margy">
                        <option>Ville</option>
                        <option>Agadir</option>
                        <option>Al-Hoceima</option>
                        <option>Arfoud</option>
                        <option>Asilah</option>
                        <option>Azrou</option>
                        <option>Ben Slimane</option>
                        <option>Benguerir</option>
                        <option>Beni Mellal</option>
                        <option>Berkane</option>
                        <option>Berrechid</option>
                        <option>Boujdour</option>
                        <option>Bouznika</option>
                        <option>Casablanca</option>
                        <option>Chefchaouen</option>
                        <option>Dakhla</option>
                        <option>El Jadida</option>
                        <option>Errachidia</option>
                        <option>Essaouira</option>
                        <option>Fès</option>
                        <option>Fquih BenSalah</option>
                        <option>Guelmim</option>
                        <option>Ifrane</option>
                        <option>Jerada</option>
                        <option>Kénitra</option>
                        <option>Khémisset</option>
                        <option>Khénifra</option>
                        <option>Khouribga</option>
                        <option>Ksar el-Kébir</option>
                        <option>Laâyoune </option>
                        <option>Lagouira</option>
                        <option>Larache</option>
                        <option>Marrakech</option>
                        <option>Mehdia</option>
                        <option>Meknès</option>
                        <option>Mohammédia</option>
                        <option>Nador</option>
                        <option>Ouarzazate</option>
                        <option>Oujda</option>
                        <option>Rabat</option>
                        <option>Safi</option>
                        <option>Sala El Jadida</option>
                        <option>Salé</option>
                        <option>Sefrou</option>
                        <option>Settat</option>
                        <option>Sidi Slimane</option>
                        <option>Skhirat</option>
                        <option>Tanger</option>
                        <option>Taza</option>
                        <option>Temara</option>
                        <option>Tétouan</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-success">Trouver mon stage</button>
                </div>
            </div>
            <div class="element container-fluid">

            </div>
            <div class="element container-fluid">

            </div>
            <div class="element container-fluid">

            </div>
            <div class="element container-fluid">

            </div>
            <div class="element container-fluid">

            </div>
            <div class="element container-fluid">

            </div>
        </div>
        <script>
            $('#count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
            $('#count2').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
            $('#count3').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>