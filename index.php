<?php

use App\Context\Distributeur;

    require_once(__DIR__.'/libraries/autoload.php');

    echo "Distributeur de bonbons<br>";

    $distributeur = new Distributeur(5);
    $distributeur->insererPiece();      
    $distributeur->tournerPoignee();

    echo "<br>";
    $distributeur->insererPiece();      
    $distributeur->ejecterPiece();
    $distributeur->tournerPoignee();

    echo "<br>";
    $distributeur->insererPiece();      
    $distributeur->tournerPoignee();
    $distributeur->insererPiece();      
    $distributeur->tournerPoignee();
    $distributeur->ejecterPiece();

    echo "<br>";
    $distributeur->insererPiece();      
    $distributeur->insererPiece();      
    $distributeur->tournerPoignee();
    $distributeur->insererPiece();      
    $distributeur->tournerPoignee();
    $distributeur->insererPiece();      
    $distributeur->tournerPoignee();

?>