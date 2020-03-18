<?php
$action = $_REQUEST['action'];


switch($action){

case 'ajouterMedicament';{
  $Familles = $pdo->LesFamilles();
  $idMedicament = $_REQUEST['idMedicament'];
  $nomCommercial = $_REQUEST['nomCommercial'];
  $prix = $_REQUEST['prix'];
  $idFamille = $_REQUEST['idFamille'];
  $composition = $_REQUEST['composition'];
  $effets = $_REQUEST['effets'];
  $contreIndications = $_REQUEST['contreIndications'];
  $pdo->ajouterMedicament($idMedicament, $nomCommercial, $prix, $idFamille, $composition, $effets, $contreIndications);
  var_dump($idMedicament, $nomCommercial, $prix, $idFamille, $composition, $effets, $contreIndications);
  include('vues/v_ajouterMedicament.php');
  break;
}

case 'ajouterMedecin';{
  $nom = $_REQUEST['nom'];
  $prenom = $_REQUEST['prenom'];
  $adresse = $_REQUEST['adresse'];
  $tel = $_REQUEST['tel'];
  $specialite = $_REQUEST['specialite'];
  $departement = $_REQUEST['departement'];

  $pdo->ajouterMedecin($nom, $prenom, $adresse, $tel, $specialite, $departement);
  include('vues/v_ajouterMedecin.php');
  break;
}



}
