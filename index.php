<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Connectez-vous sur STAGE HUNT</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_connexion.css">
    <style>
        *::-webkit-scrollbar {
            width: 7px !important;
        }

        /* Track */
        *::-webkit-scrollbar-track {
            background: inherit !important;
            opacity: 1;
        }

        /* Handle */
        *::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background: rgb(214, 214, 214);
            opacity: 0.8;
        }

        /* Handle on hover */
        *::-webkit-scrollbar-thumb:hover {
            background: rgb(167, 160, 160);
        }
    </style>
</head>

<body>
    <div class="container">
        <article class=" shadow col xs-12 col-sm-12 col-lg-6 col-md-9">
            <div class="contenu1">
                <img class="img-fluid" src="img/logo.png"><br>
                <h4 align="center">Accéder à STAGE HUNT</h4><br>
                <input type="email" class="form-control test" placeholder="Adresse e-mail" name="mail">
                <input type="password" class="form-control test" placeholder="Mot de passe" name="pass">
                <button id="submit" class="btn btn-primary btn-sm login">Se Connecter</button>
                <br>
                <a data-toggle="modal" data-target="#exampleModal" href="">creer un compte</a>
            </div>
            <!-- Modal 1 -->
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><img class="img-fluid logo" src="img/logo.png"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;
                                </span>
                            </button>
                        </div>
                        <!-- Contenu du modal-->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Inscrivez vous</h5>
                                </div>
                                <form id="form_connexion" enctype="multipart/form-data" class="row">
                                    <div class="col xs-12 col-sm-12 col-lg-6 col-md-12">
                                        <input type="text" class="form-control" placeholder="Votre nom et prenom" name="nompre" required="required"><br>
                                        <input type="text" class="form-control" placeholder="Adresse email" name="mail" required="required"><br>
                                        <input type="password" class="form-control" placeholder="Mot de passe" name="mdp" required><br>
                                        <label for="date" id="naissance">Saisissez votre date de naissance</label> <br><br>
                                        <input type="date" id="date" name="date_naissance" required="required"> <br> <br>
                                        <textarea class="form-control" rows="3" placeholder="Description.." name="bio"></textarea><br>
                                    </div>
                                    <div class="col xs-12 col-sm-12 col-lg-6 col-md-12">
                                        <label for="ci">Choisisez vos centres d'interet:</label><br> <br>
                                        <select class="form-select" aria-label="multiple select example" name="ci[]" id="ci" multiple>
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
                                            <!--?php
                                            include('connexion.php');
                                            $sql = "select * from filiere";
                                            $res = mysqli_query($link, $sql);
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                echo '<option value=' . $row['ID_FILIERE'] . '>';
                                                echo $row['LIB_FIL'];
                                                echo '</option>';
                                            }
                                            mysqli_close($link);
                                            ?-->
                                        </select> <br>
                                        <label for="exampleInputFile" class="form-label">Selectionnez une photo de profil</label><br><br>
                                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="fichier"><br><br>
                                        <label for="exampleInputFile" class="form-label">Selectionnez votre cv</label><br><br>
                                        <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" name="fichier2"><br><br>
                                    </div>
                                    <div class="col xs-12 col-sm-12 col-lg-12 col-md-12"><small id="fileHelp" class="form-text text-muted">En appuyant sur S’inscrire, vous acceptez nos Conditions générales, notre Politique d’utilisation des données et notre Politique d’utilisation des cookies.</small><br><br>
                                        <input type="submit" class=" btn btn-primary insc" name="sub" value="sinscrire">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </article>
    </div>
    <!--js code link-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#submit").click(function(){
                document.location.href="user.php";
            });
        });
    </script>
</body>

</html>