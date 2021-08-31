<?php
session_start();
Init();

    ob_start();
    include('template/navbar.php');
    $template['navbar'] = ob_get_clean();

    ob_start();
    include('template/footer.php');
    $template['footer'] = ob_get_clean();

    ob_start();
    include('template/pannier.php');
    $template['pannier'] = ob_get_clean();
    
    ob_start();
    include('template/details.php');
    $template['details'] = ob_get_clean();
    
function ProductList(){
    $produits = [
        0 => [
            'title'=>'Rolex Or',
            'desc'=>'Commencez à tenir',
            'image'=>'https://www.montres-de-luxe.com/photo/art/large_x2/49563988-38518601.jpg?v=1599231870',
            'price'=>12,
            'count'=>1,
        ],
        1 => [
            'title'=>'Montre casio',
            'desc'=>'Commencez à tenir',
            'image'=>'https://www.montres-de-luxe.com/photo/art/large_x2/49563988-38518601.jpg?v=1599231870',
            'price'=>12,
            'count'=>1,
        ],
        2 => [
            'title'=>'Supreme XXL',
            'desc'=>'Commencez à tenir',
            'image'=>'https://www.montres-de-luxe.com/photo/art/large_x2/49563988-38518601.jpg?v=1599231870',
            'price'=>12,
            'count'=>1,
        ],
        3 => [
            'title'=>'Montre Addidas',
            'desc'=>'Commencez à tenir',
            'image'=>'https://www.montres-de-luxe.com/photo/art/large_x2/49563988-38518601.jpg?v=1599231870',
            'price'=>12,
            'count'=>1,
        ],
        4 => [
            'title'=>'Rolex Or',
            'desc'=>'Commencez à tenir',
            'image'=>'https://www.montres-de-luxe.com/photo/art/large_x2/49563988-38518601.jpg?v=1599231870',
            'price'=>12,
            'count'=>1,
        ],
    ];
    return $produits;
}
function displayArticle(){
    $articles = ProductList();

    ob_start();
        include('template/articles.php');
        $template = ob_get_clean();

    return $template;
}

function displayPannier(){
    
    if(isset($_SESSION['pannier'])){
        $pannier = $_SESSION['pannier'];
    } else {
        $pannier = [];
    }

    ob_start();
        include('template/articles.php');
        $template = ob_get_clean();

    return $template;
}
function Init(){
    if(!isset($_SESSION['pannier'])){
        $_SESSION['pannier'] = [];
    } 
}