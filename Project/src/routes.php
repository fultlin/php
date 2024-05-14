<?php
    return [
        '~^$~' => [src\Controllers\MainController::class, 'main'],
        '~hello/(.+)~' => [src\Controllers\MainController::class, 'sayHello'],
        '~bye/(.+)~' => [src\Controllers\MainController::class, 'byeHello'],
        '~articles~' => [src\Controllers\ArticleController::class, 'index'],
        '~article/create~'=>[src\Controllers\ArticleController::class, 'create'],
        '~article/store~'=>[src\Controllers\ArticleController::class, 'store'],
        '~article/(\d+)~'=>[src\Controllers\ArticleController::class, 'show'],
    ];