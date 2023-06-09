<?php

    namespace App\State;

use App\Context\Distributeur;

    class EtatVendu implements Etat {
        public Distributeur $distributeur;

        public function __construct(Distributeur $distributeur) {
            $this->distributeur = $distributeur;
        }

        public function insererPiece() {
            echo "<br>Veuillez patienter, le bonbon va tomber";
        }
        
        public function ejecterPiece() {
            echo "<br>Vous avez déjà tourné la poignée";
        }
        
        public function tournerPoignee() {
            echo "<br>Inutile de tourner deux fois !";
        }

        public function delivrer() {
            $this->distributeur->liberer();
            if ($this->distributeur->getNombre() > 0) {
                $this->distributeur->setEtat($this->distributeur->getEtatSansPiece());
            } else {
                echo "<br>Aïe plus de bonbons";
                $this->distributeur->setEtat($this->distributeur->getEtatEpuise());
            }
        }

    }

?>