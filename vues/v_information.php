<div class="container">
  <div class="jumbotron">
    <div class="container">
      <a href='index.php?uc=medicament&action=supprimerMedicament&idMedicament=<?php echo $idMedicament ?>'>Supprimer ce médicament</a>
<?php
foreach($Informations as $Information){
  $nomMedicament = $Information['nomCommercial'];
  $prixMedicament = $Information['prix'];
  $compoMedicament = $Information['composition'];
  $effetMedicament = $Information['effets'];
  $contreindicMedicament = $Information['contreIndications'];



  echo "<h2><U><center>".$nomMedicament."</center></U></h2><br>";
  echo "<h3><center>Prix: ".$prixMedicament."€</center></h3>";
  echo "<h3><center>Composition: ".$compoMedicament."</center></h3>";
  echo "<h3><center>Effets: ".$effetMedicament."</center></h3>";
  echo "<h3><center>Contre Indications: ".$contreindicMedicament."</center></h3>";
}
