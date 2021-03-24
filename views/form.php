<!-- Formulaire Génération d'équipe -->
<div id="target1" class="animate__animated" style="display: none;">
   <p class="border mb-0 text-md-center p-3 btn-light">Formulaire de génération d'équipe</p>
   <div class="container border p-5 m-auto">
      <p class="text-secondary p-3"> Remplissez le formulaire suivant :</p>
      <form method="post" action="generator.php" class="row g-3">
         <div class="col-sm">
                  <label for="nickname1" class="form-label">Joueur 1 *:</label>
                  <input
                     type="text"
                     class="form-control"
                     id="nickname1"
                     name="names[]"
                     required
                     pattern="^[A-Za-z1-9()_-]+$"
                     />
                  <label for="nickname2" class="form-label">Joueur 2 *:</label>
                  <input
                     type="text"
                     class="form-control"
                     id="nickname2"
                     name="names[]"
                     required
                     pattern="^[A-Za-z1-9()_-]+$"
                     />
          </div>
          <div class="col-sm">
                     <label for="nickname3" class="form-label">Joueur 3 *:</label>
                     <input
                        type="text"
                        class="form-control"
                        id="nickname3"
                        name="names[]"
                        required
                        pattern="^[A-Za-z1-9()_-]+$"
                        />
                     <label for="nickname4" class="form-label">Joueur 4 *:</label>
                     <input
                        type="text"
                        class="form-control"
                        id="nickname4"
                        name="names[]"
                        required
                        pattern="^[A-Za-z1-9()_-]+$"
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