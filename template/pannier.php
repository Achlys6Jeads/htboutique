<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <?php
                        foreach($_SESSION['pannier'] as $key => $value):
                    ?>
                    <li id="ItemId<?= $key ?>" onclick="RemoveFromBasket('<?= $key ?>')" class="list-group-item Product d-flex justify-content-between align-items-center"> <?= $value['title'] ?><span
                            class="badge badge-primary badge-pill"><?= $value['count'] ?>)<?= $value['price']*@$value['count'] ?>€</span> </li>
                    <?php
                        endforeach;
                    ?>

                    <?php
                        if($_SESSION['pannier'] == []){
                    ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center"> Cras justo odio <span
                            class="badge badge-primary badge-pill">Votre pannier est vide</span> </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
