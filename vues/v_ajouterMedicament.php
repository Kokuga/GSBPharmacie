<div class="container">
  <div class="jumbotron">
    <div class="container">
<form action="index.php?uc=ajouter&action=ajouterMedicament" method="post">
    <div class="corpsForm">
        <h4>Nouveau Medicament</h4>


        <div class="form-group">
            <label for="txtMontantHF">ID du médicament</label>
            <input class="form-control" type="text" id="idMedicament" name="idMedicament" size="10" maxlength="10" value="" />
        </div>

        <div class="form-group">
            <label for="txtMontantHF">Nom du médicament</label>
            <input class="form-control" type="text" id="nomCommercial" name="nomCommercial" size="25" maxlength="25" value="" />
        </div>

        <div class="form-group">
            <label for="txtMontantHF">Prix</label>
            <input class="form-control" type="text" id="prix" name="prix" size="10" maxlength="10" value="" />
        </div>

        <label>Famille du médicament </label>
        <select class="form-control" id="txtpaiementHF" name="idFamille">
            <?php
            //Affiche le mode de paiement venant de la table ModeDePaiement
                foreach($Familles as $Famille) {
                    $idFamille = $Famille['id'];
                    $nomFamille = $Famille['libelle'];

                    echo "<option value='$idFamille'>" . $nomFamille ."</option>";
                }

            ?>
          </select>
            <div class="form-group">
                <label for="txtMontantHF">Composition</label>
                <input class="form-control" type="text" id="composition" name="composition" size="100" maxlength="100" value="" />
            </div>

            <div class="form-group">
                <label for="txtMontantHF">Effets</label>
                <input class="form-control" type="text" id="effets" name="effets" size="100" maxlength="100" value="" />
            </div>

            <div class="form-group">
                <label for="txtMontantHF">ContreIndications</label>
                <input class="form-control" type="contreIndications" id="contreIndications" name="prix" size="100" maxlength="100" value="" />
            </div>

          </div>
          <div style="float:right;">
              <button class="btn btn-outline-primary" id="ajouter" type="submit" value="Ajouter">Ajouter</button>
              <button class="btn btn-outline-secondary" id="effacer" type="reset" value="Effacer">Effacer</button>
          </div>
        </div>
      </form>
    </div>
    </div>
    </div>
