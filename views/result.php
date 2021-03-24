
  <div class="accordion container  p-5 m-auto" id="accordionExample">
      <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Equipe 1
              </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p><?= htmlspecialchars($aPlayersChunked[0][0]) ?></p>
                  <p><?= htmlspecialchars($aPlayersChunked[0][1]) ?></p>
              </div>
          </div>
      </div>
      <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Equipe 2
              </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p><?= htmlspecialchars($aPlayersChunked[1][0]) ?></p>
                  <p><?= htmlspecialchars($aPlayersChunked[1][1]) ?></p>
              </div>
          </div>
      </div>
  </div>
  