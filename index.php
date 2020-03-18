<?php
require_once("include/class.pdogsbphar.inc.php");
include("vues/v_entete.php") ;
include("vues/v_sommaire.php");
//include("controleurs/c_medicament.php");

$pdo = PdoGsb::getPdoGsb();

$uc = $_REQUEST['uc'];
switch($uc){
	case 'medicament':{
		include("controleurs/c_medicament.php");break;
	}
	case 'acheter':{
		include("controleurs/c_acheter.php");break;
}
	case 'ajouter':{
		include('controleurs/c_ajouter.php');break;
	}

}

 ?>
