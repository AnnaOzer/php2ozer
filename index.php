<?php
require_once __DIR__ . '/models/news.php';
$news=[
    [
        'title' => 'Первая новость',
        'text'=>'В лесу родилась елочка',
    ],
    [
        'title' => 'Вторая новость',
        'text' => 'В лесу она росла',
    ]
];

include 'view/index.php';