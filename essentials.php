<?php
session_start();

ob_start();
    include('template/navbar.php');
    $template['navbar'] = ob_get_clean();

ob_start();
    include('template/footer.php');
    $template['footer'] = ob_get_clean();

function displayArticle(){
    $articles = [
        0 => [
            'title'=>'Rolex Or',
            'desc'=>'Commencez à tenir',
            'price'=>12,
        ],
        1 => [
            'title'=>'Rolex Or',
            'desc'=>'Commencez à tenir',
            'price'=>12,
        ],
        2 => [
            'title'=>'Rolex Or',
            'desc'=>'Commencez à tenir',
            'price'=>12,
        ],
        3 => [
            'title'=>'Rolex Or',
            'desc'=>'Commencez à tenir',
            'price'=>12,
        ],
        4 => [
            'title'=>'Rolex Or',
            'desc'=>'Commencez à tenir',
            'price'=>12,
        ],
    ];

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