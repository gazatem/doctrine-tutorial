<?php
ini_set('display_errors', 'On');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require "vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/entities"), $isDevMode);

$conn = array(
    'driver'    => 'pdo_mysql',
    'host'      => getenv('DB_HOST'),
    'dbname'    => getenv('DB_DATABASE'),
    'user'      => getenv('DB_USERNAME'),
    'password'  => getenv('DB_PASSWORD'),
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

//
// $post = new Post;
// $post->share('hello world!!!');
//
//
//
//
// function sum(int $a, int $b): int {
// 	return $a + $b;
// }
//
// //int $sayi1 = 5;
// echo sum(2, 7);
