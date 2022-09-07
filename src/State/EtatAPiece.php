<?php

    namespace App\State;

use App\Context\Distributeur;

    class EtatAPiece implements Etat {
        public Distributeur $distributeur;

        public function __construct(Distributeur $distributeur) {
            $this->distributeur = $distributeur;
        }

        public function insererPiece() {
        }
        
        public function ejecterPiece() {
        }
        
        public function tournerPoignee() {
        }

        public function delivrer() {
        }

    }

?>