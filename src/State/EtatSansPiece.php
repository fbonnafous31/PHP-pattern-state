<?php

    namespace App\State;

use App\Context\Distributeur;

    class EtatSansPiece implements Etat {
        public Distributeur $distributeur;

        public function __construct(Distributeur $distributeur) {
            $this->distributeur = $distributeur;
        }

        public function insererPiece() {
            echo "<br>Vous avez inséré une pièce";
            $this->distributeur->setEtat($this->distributeur->getEtatAPiece());
        }
        public function ejecterPiece() {
            echo "<br>Vous n'avez pas inséré de pièce";
        }
        
        public function tournerPoignee() {
            echo "<br>Vous avez tourné, mais il n'y a pas de pièce";
        }

        public function delivrer() {
            echo "<br>Il faut payer d'abord";
        }

    }

?>