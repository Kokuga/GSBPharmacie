<?php
$action = $_REQUEST['action'];


switch($action){

  case 'acheterMedicament';{
    $Medicaments = $pdo->LesMedicaments();
    $Medecins = $pdo->LesMedecins();
		$idMedicament = $_REQUEST['nomCommercial'];
		$idMedecin = $_REQUEST['idMedecin'];
    $quantite = $_REQUEST['quantite'];
    $Commandes = $pdo->LesCommandes($idMedecin);
    $motif = $_REQUEST['bilan'];
    $bilan = $_REQUEST['motif'];
    $faireCommande = $pdo->faireCommande($motif, $bilan, $idMedecin);
    $idCommandes = $pdo->getidCommande();
    foreach($idCommandes as $idCommand){
      $idCommande = $idCommand["id"];
    }
    $pdo->faireAchat($idCommande, $idMedicament, $quantite);




    include('vues/v_acheter.php');
    break;
  }

  case 'voirCommande';{
    $Medicaments = $pdo->LesMedicaments();
    $Medecins = $pdo->LesMedecins();
    $idMedecin = $_REQUEST['idMedecin'];
    $voirCommandes = $pdo->voirCommande($idMedecin);
    include('vues/v_commande.php');



    break;
  }
  case 'supprimerCommande';{
    $idCommande = $_REQUEST['idCommande'];
    $pdo->supprimerCommande($idCommande);
    $Medicaments = $pdo->LesMedicaments();
    $Medecins = $pdo->LesMedecins();
    $idMedecin = $_REQUEST['idMedecin'];
    $voirCommandes = $pdo->voirCommande($idMedecin);
    include('vues/v_commande.php');
    break;
  }

  case 'acheterCommande';{
    $idMedecin = $_REQUEST['idMedecin'];
    $Medecins = $pdo->LesMedecins();
    var_dump($idMedecin);
    $pdo->acheterCommande($idMedecin);
    include('vues/v_commande.php');

  }


}
