<?php
use Elliptic\EC;
require __DIR__ . "/vendor/autoload.php";

function generate(){
    $ec = new EC('secp256k1');
    $key = $ec->genKeyPair();
    echo "API_KEY:";
    echo $key->getPublic(true, "hex");
    echo "\n";
    echo "API_SECRET:";
    echo $key->getPrivate("hex");
}
generate();