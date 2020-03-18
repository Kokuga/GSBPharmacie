<form action="index.php?uc=acheter&action=voirCommande" method="post">
  <label>Nom du médecin </label>
  <select class="form-control" id="txtpaiementHF" name="idMedecin">
      <?php
      //Affiche le mode de paiement venant de la table ModeDePaiement
          foreach($Medecins as $Medecin) {
              $idMedecin = $Medecin['id'];
              $nomMedecin = $Medecin['nom'];
              $prenomMedecin = $Medecin['prenom'];
              $specialite = $Medecin['specialiteComplementaire'];

              echo "<option value='$idMedecin'>" . $nomMedecin . " " . $prenomMedecin . " " . $specialite." " .$idMedecin. "</option>";

          }

?>
</select>


<br>



<table class="table">
  <thead class="thead-dark">
    <tr>
      <!--Tableau sur l'affichage-->
      <th scope="col">Commande</th>
      <th scope="col">Nom du médecin</th>
      <th scope="col">Medicament</th>
      <th scope="col">Quantité</th>
      <th scope="col">Prix unitaire</th>
      <th scole="col">Prix total</th>
      <th scole="col">&nbsp</th>

    </tr>
  </thead>
  <tbody>
<?php

foreach($voirCommandes as $voirCommande){
  $idCommande = $voirCommande['idCommande'];
  $idMedecin = $voirCommande['idMedecin'];
  $nomMedicament = $voirCommande['nomCommercial'];
  $nomMedecin = $voirCommande['nom'];
  $quantite = $voirCommande['quantite'];
  $prix = $voirCommande['prix'];
  $prixTotal = $prix * $quantite;
  $totalCommande = $totalCommande + $prixTotal;



  ?>


    <tr>
    <td> <?php echo $idCommande; ?></td>
    <td> <?php echo $nomMedecin; ?></td>
    <td><?php echo $nomMedicament; ?></td>
    <td><?php echo $quantite; ?></td>
    <td><?php echo $prix; ?>€</td>
    <td><?php echo $prixTotal; ?>€ </td>
    <td><div class='d-flex justify-content-end'><a href="index.php?uc=acheter&action=supprimerCommande&idCommande=<?php echo $idCommande ?>"
      onclick="return confirm('Voulez-vous vraiment supprimer cette commande ? ');">Supprimer cette commande</a></td>
    </div>
  </td>





    </tr>

<?php

}


?>
<div style="float:right;">
    <button class="btn btn-outline-primary" id="ajouter" type="submit" value="Ajouter">Ajouter</button>
    <button class="btn btn-outline-secondary" id="effacer" type="reset" value="Effacer">Effacer</button>
</div>
</form>
</table>
<?php
echo "Prix Total de la commande : ".$totalCommande."€";

?>
<br>
<br>

<a href="index.php?uc=acheter&action=acheterCommande&idMedecin=<?php echo $idMedecin ?>"
  onclick="return confirm('Confirmer la commande ?')">Acheter</a>
<?php
