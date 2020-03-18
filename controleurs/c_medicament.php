<?php
$action = $_REQUEST['action'];


switch($action){
  case 'voirMedicament':{
    $Medicaments = $pdo->LesMedicaments();

    include("vues/v_medicament.php");
    break;

  }

  case 'voirInfo':{
    $idMedicament = $_REQUEST['idMedicament'];
    $Informations = $pdo->infoMedicament($idMedicament);
    include("vues/v_information.php");


    break;
  }

  case 'supprimerMedicament':{
    $idMedicament = $_REQUEST['idMedicament'];
    $pdo->supprimerMedicament($idMedicament);
    $Medicaments = $pdo->LesMedicaments();
    var_dump($idMedicament);
    include("vues/v_medicament.php");
  }

}
