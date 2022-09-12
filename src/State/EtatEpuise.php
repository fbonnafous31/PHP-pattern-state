<?php

    namespace App\State;

use App\Context\Distributeur;

    class EtatEpuise implements Etat {
        public Distributeur $distributeur;

        public function __construct(Distributeur $distributeur) {
            $this->distributeur = $distributeur;
        }

        public function insererPiece() {
            echo "<br>Vous ne pouvez pas insérer de pièce, nous sommes en rupture de stock";
        }
        
        public function ejecterPiece() {
            echo "<br>Ejection impossible, vous n'avez pas inséré de pièce";
        }
        
        public function tournerPoignee() {
            echo "<br>Vous avez tourné mais il n'y a pas de bonbon";
        }

        public function delivrer() {
            echo "<br>Pas de bonbon délivré";
        }

    }

?>