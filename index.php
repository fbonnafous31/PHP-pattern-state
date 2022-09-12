<?php

use App\Context\Distributeur;

    require_once(__DIR__.'/libraries/autoload.php');

    echo "Distributeur de bonbons<br>";

    $distributeur = new Distributeur(5);

    $distributeur->insererPiece();
    $distributeur->tournerPoignee();

    $distributeur->insererPiece();
    $distributeur->tournerPoignee();

    $distributeur->insererPiece();
    $distributeur->tournerPoignee();

?>