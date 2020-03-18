


<h2><center>Médicaments disponibles: </h2></center>
<a class="nav-link" href="index.php?uc=ajouter&action=ajouterMedicament" title="AjouterMed "><h3><center>Ajouter un médicament</center></h3></a>
    <div class="container">
      <div class="jumbotron">
        <!--<div class="container">-->
    <div class="row">
<?php
//Boucle affichant les moyens de paiements
foreach($Medicaments as $Medicament) {
  $nomMedicament = $Medicament['nomCommercial'];
  $prixMedicament = $Medicament['prix'];
  $compMedicament = $Medicament['composition'];
  $idMedicament = $Medicament['id'];

  ?>
            <div class="col-md-3 col-lg-4 B h-50 pb-5">
              <center><a href='index.php?uc=medicament&action=voirInfo&idMedicament=<?php echo $idMedicament ?>'><?php echo $nomMedicament ."</center></a>";
             echo "<center>" . $prixMedicament ."€</center>";
            //  echo "<br>" .$compMedicament;
              //  $prixMedicament . "€";
              //  $compMedicament;?>

            </div>



<?php
}
?>
</div>

</tbody>
</table>
