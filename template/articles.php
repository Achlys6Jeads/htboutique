<div class="py-5">
    <div class="container">
      <div class="row">
        <?php
          foreach($articles as $key => $value):
        ?>
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="https://static.pingendo.com/cover-moon.svg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><?= $value['title'] ?></h4>
              <p class="card-text"><?= $value['desc'] ?></p> <a href="#" class="btn btn-primary">Ajouter au pannier</a>
            </div>
          </div>
        </div>
        <?php
          endforeach;
        ?>
      </div>
    </div>
  </div>