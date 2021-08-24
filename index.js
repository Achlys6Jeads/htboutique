document.addEventListener("DOMContentLoaded", function(event) { 
    
    UpdatePannierCount();

});
function load(target, url) {
    var r = new XMLHttpRequest();
    r.open("GET", url, true);
    r.onreadystatechange = function () {
        if (r.readyState != 4 || r.status != 200) return;
        if(target == "none"){

        } else {
            target.innerHTML =  r.responseText;
        }
    };
    r.send();
}

function RemoveFromBasket(id) {
    load('none', 'data.php?display=RemoveBasket&id=' + id);
    document.getElementById('ItemId' + id).setAttribute ('style', 'display: none !important;');
    var slides = document.getElementsByClassName("Product");


    UpdatePannierCount();
}


function AjoutPannier(id) {
    load('none', 'data.php?display=AddBasket&id=' + id);
    UpdatePannierCount();
}

function UpdatePannierCount() {
    load(document.getElementById('pannierCount'), 'data.php?display=PannierCount');
    setTimeout(() => { 
    load(document.getElementById('pannierCount'), 'data.php?display=PannierCount');
    document.getElementById('pannierCountFinal').innerHTML = document.getElementById('pannierCount').innerHTML;
    }, 2000);
    
}
