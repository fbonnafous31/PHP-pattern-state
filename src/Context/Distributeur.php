<?php

    namespace App\Context;

use App\State\Etat;
use App\State\EtatVendu;
use App\State\EtatAPiece;
use App\State\EtatEpuise;
use App\State\EtatSansPiece;
use App\State\EtatGagnant;

    class Distributeur {

        public Etat $etatEpuise;
        public Etat $etatSansPiece;
        public Etat $etatAPiece;
        public Etat $etatVendu;
        public Etat $etatGagnant;
        
        public $nombre = 0;

        public function __construct(int $nombreBonbons) {
            $this->etatEpuise    = new EtatEpuise($this);
            $this->etatSansPiece = new EtatSansPiece($this);
            $this->etatAPiece    = new EtatAPiece($this);
            $this->etatVendu     = new EtatVendu($this);
            $this->etatGagnant   = new EtatGagnant($this);
            $this->nombre        = $nombreBonbons;

            if ($nombreBonbons > 0) {
                $this->etat = $this->etatSansPiece; 
            } 
        }

        public function insererPiece() {
            $this->etat->insererPiece();
        }

        public function ejectePiece() {
            $this->etat->ejecterPiece();
        }

        public function tournerPoignee() {
            $this->etat->tournerPoignee();
            $this->etat->delivrer();
        }

        public function liberer() {
            echo "<br> Un bonbon va sortir";
            if ($this->nombre > 0) {
                $this->nombre = $this->nombre - 1;
            }
        }

        public function setEtat(Etat $etat) {
            $this->etat = $etat;
        }

        public function getEtatSansPiece(): Etat {
            return $this->etatSansPiece;
        }

        public function getEtatAPiece(): Etat {
            return $this->etatAPiece;
        }

        public function getEtatEpuise(): Etat {
            return $this->etatEpuise;
        }

        public function getEtatVendu(): Etat {
            return $this->etatVendu;
        }

        public function getEtatGagnant(): Etat {
            return $this->etatGagnant;
        }

        public function getNombre(): int {
            return $this->nombre;
        }

    }

?>