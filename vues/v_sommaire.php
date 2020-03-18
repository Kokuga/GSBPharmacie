<?php
$action = $_REQUEST['action'];
?>
<!--Menu sélection saisie/consultation -->

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?uc=medicament&action=voirMedicament" title="Liste des médicaments ">Voir les médicaments</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?uc=acheter&action=voirCommande" title="Acheter ">Voir les commandes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?uc=acheter&action=acheterMedicament" title="Acheter ">Acheter un médicament</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?uc=ajouter&action=ajouterMedecin" title="AjouterMedecin ">Ajouter un Medecin</a>
            </li>

        </ul>
    </div>
</nav>
