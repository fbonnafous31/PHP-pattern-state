<?php

    namespace App\State;

use App\Context\Distributeur;

    class EtatAPiece implements Etat {
        public Distributeur $distributeur;

        public function __construct(Distributeur $distributeur) {
            $this->distributeur = $distributeur;
        }

        public function insererPiece() {
            echo "<br>Vous ne pouvez pas insérer d'autre pièce";
        }
        
        public function ejecterPiece() {
            echo "<br>Pièce retournée";
            $this->distributeur->setEtat($this->distributeur->getEtatSansPiece());
        }
        
        public function tournerPoignee() {
            $hasard  = rand(1, 10);
            $gagnant = rand (1, 10);
            echo "<br>Vous avez tourné";
            
            if (($hasard == $gagnant) and ($this->distributeur->getNombre() > 1)) {
                $this->distributeur->setEtat($this->distributeur->getEtatGagnant());    
            } else {
                $this->distributeur->setEtat($this->distributeur->getEtatVendu());
            }
        }

        public function delivrer() {
            echo "<br>Pas de bonbon délivré";
        }

    }

?>