<?php
include('essentials.php');

if(isset($_GET['display'])){

    $d = $_GET['display'];

    if($d == "PannierJson"){
        
        foreach($_SESSION['pannier'] as $key => $value):
    ?>
<li id="ItemId<?= $key ?>" class="list-group-item Product d-flex justify-content-between align-items-center">
<img src="<?= $value['image'] ?>" style="height:50px">

   <a href="details.php?id=<?= $key ?>"><?= $value['title'] ?></a> 

    <div>
        <span class="badge badge-primary badge-pill"><input id="upd<?= $key ?>" onchange="ChangeCountPannier(<?= $key ?>)" style="width:60px;" type="number" value="<?= $value['count'] ?>"> article(s)
            <?= $value['price']*@$value['count'] ?>€</span> <a onclick="RemoveFromBasket('<?= $key ?>')"><i
                class="fa fa-car"></i></a>
    </div>

</li>
<?php
        endforeach;
    ?>

<?php
        if($_SESSION['pannier'] == []){
    ?>
<li class="list-group-item d-flex justify-content-between align-items-center"> Faites les courses <span
        class="badge badge-primary badge-pill">Votre pannier est vide</span> </li>
<?php
        }
  
    }
    
    if($d == "PannierCount"){
      
        $price = 0;
        $count = 0;
        foreach($_SESSION['pannier'] as $key => $value){
            $count = $count + 1*$value['count'];
            $priceHere = $value['price']*$value['count'];
            $price = $price +$priceHere;
        }
        echo $count . ' - ' . $price . '€';
        return;
    }

    if($d == "PannierCountEnd"){
      
        $price = 0;
        $count = 0;
        foreach($_SESSION['pannier'] as $key => $value){
            $count = $count + 1*$value['count'];
            $priceHere = $value['price']*$value['count'];
            $price = $price + $priceHere;
        }
        echo $count . ' articles pour ' . $price . '€';
        $pricetva = $count*2.2+$price;
        echo '<br>  (2,2€ de TVA p/A) Cout TTC: ' . $pricetva . '€';
        return;
    }
    if($d == "AddBasket"){
        $productId = $_GET['id'];

        $produit = ProductList()[$productId];
        if(!isset($_GET['count'])){
            if(!isset($_SESSION['pannier'][$productId])){
                $_SESSION['pannier'][$productId] = $produit;
            } else {
                $_SESSION['pannier'][$productId]['count'] =  $_SESSION['pannier'][$productId]['count']+1;
            }
        } else {
            if(isset($_SESSION['pannier'][$productId])){
                $_SESSION['pannier'][$productId]['count'] =  $_GET['count'];
            }
        }
     
        return;
    }



    if($d == "RemoveBasket"){
        $productId = $_GET['id'];
        $produit = ProductList()[$productId];

        if(isset($_SESSION['pannier'][$productId])){
           unset($_SESSION['pannier'][$productId]);
        }
        return;
    }

}