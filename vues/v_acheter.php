<div class="container">
  <div class="jumbotron">
    <div class="container">
<form action="index.php?uc=acheter&action=acheterMedicament" method="post">
    <div class="corpsForm">
        <h4>Nouvelle commande</h4>
        <h6>Critère obligatoire avec *</h6>

        <label>Nom du médicament(*)</label>
        <select class="form-control" id="txtpaiementHF" name="nomCommercial">
            <?php
            //Affiche le mode de paiement venant de la table ModeDePaiement
                foreach($Medicaments as $Medicament) {
                    $nom = $Medicament['nomCommercial'];
                    $idMedicament = $Medicament['id'];

                    echo "<option value='$idMedicament'>" . $nom . "</option>";

                }
            ?>
        </select>

        <label>Nom du médecin(*) </label>
        <select class="form-control" id="txtpaiementHF" name="idMedecin">
            <?php
            //Affiche le mode de paiement venant de la table ModeDePaiement
                foreach($Medecins as $Medecin) {
                    $nomMedecin = $Medecin['nom'];
                    $specialite = $Medecin['specialiteComplementaire'];
                    $idMedecin = $Medecin['id'];
                    $prenomMedecin = $Medecin['prenom'];

                    echo "<option value='$idMedecin'>" . $nomMedecin . " " . $prenomMedecin . " " . $specialite. "</option>";
                }

            ?>
        </select>
        <div class="form-group">
            <label for="txtMontantHF">Quantité du médicament(*)</label>
            <input class="form-control" type="text" id="quantite" name="quantite" size="10" maxlength="10" value="" />
        </div>


        <div class="form-group">
            <label for="txtMontantHF">Motif</label>
            <input class="form-control" type="text" id="motif" name="motif" size="10" maxlength="10" value="" />
        </div>

        <div class="form-group">
            <label for="txtMontantHF">Bilan</label>
            <input class="form-control" type="text" id="bilan" name="bilan" size="10" maxlength="10" value="" />
        </div>




        </div>
    </div>
    <div style="float:right;">
        <button class="btn btn-outline-primary" id="ajouter" type="submit" value="Ajouter">Commander</button>
        <button class="btn btn-outline-secondary" id="effacer" type="reset" value="Effacer">Effacer</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
