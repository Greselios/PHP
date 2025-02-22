<?php

    spl_autoload_register(function(string $className)) {
        require_once __DIR__ .'\\'. $className. '.php';
    }

    
    // echo dirname(__DIR__) .'../src/Models/Articles/Article.php';
    $user = new src\Models\Users\User('Ivan');
    $article = new src\Models\Articles\Article('title', 'test', $user);

    var_dump($user);