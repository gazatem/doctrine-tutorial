<?php
// update_product.php <id> <new-name>
require_once "bootstrap.php";

$id = $argv[1] ?? 3;
$newName = $argv[2] ?? "Another Product";

$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName($newName);

$entityManager->flush();
