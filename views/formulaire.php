<!-- Formulaire Génération d'équipe -->
<div id="target1" class="animate__animated" style="display: none;">
            <p class="border mb-0 text-md-center p-3 btn-light">Formulaire de génération d'équipe</p>
            <div class="container border p-5 m-auto">
            <p class="text-secondary p-3"> Remplissez le formulaire suivant :</p>
            <form method="post" action="./views/result.php" class="">
              <div class="row">
                <div class="col-sm">
                  <label for="nickname1" class="form-label">Joueur 1 *:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nickname1"
                    name="nickname1"
                    required
                  />
                </div>
                <div class="col-sm">
                  <label for="nickname2" class="form-label">Joueur 2 *:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nickname2"
                    name="nickname2"
                    required
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <label for="nickname3" class="form-label">Joueur 3 *:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nickname3"
                    name="nickname3"
                    required
                  />
                </div>
                <div class="col-sm">
                  <label for="nickname4" class="form-label">Joueur 4 *:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nickname4"
                    name="nickname4"
                    required
                  />
                </div>
              </div>
              <!-- Validation -->
              <div class="col-12">
                <button type="submit" class="btn btn-success container-xxl">
                  Valider
                </button>
              </div>
            </form>
          </div>
        </div>
    </div>

