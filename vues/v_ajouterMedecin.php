<div class="container">
  <div class="jumbotron">
    <div class="container">
<form action="index.php?uc=ajouter&action=ajouterMedecin" method="post">
    <div class="corpsForm">
        <h4>Nouveau Medecin</h4>


        <div class="form-group">
            <label for="txtMontantHF">Nom</label>
            <input class="form-control" type="text" id="nom" name="nom" size="10" maxlength="10" value="" />
        </div>

        <div class="form-group">
            <label for="txtMontantHF">Prenom</label>
            <input class="form-control" type="text" id="prenom" name="prenom" size="25" maxlength="25" value="" />
        </div>

        <div class="form-group">
            <label for="txtMontantHF">Adresse</label>
            <input class="form-control" type="text" id="adresse" name="adresse" size="100" maxlength="100" value="" />
        </div>

            <div class="form-group">
                <label for="txtMontantHF">Téléphone</label>
                <input class="form-control" type="text" id="tel" name="tel" size="100" maxlength="100" value="" />
            </div>

            <div class="form-group">
                <label for="txtMontantHF">Specialité Complementaire</label>
                <input class="form-control" type="text" id="specialite" name="specialite" size="100" maxlength="100" value="" />
            </div>

            <div class="form-group">
                <label for="txtMontantHF">Département</label>
                <input class="form-control" type="text" id="departement" name="departement" size="100" maxlength="100" value="" />
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
