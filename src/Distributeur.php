<?php

    namespace App;

    class Distributeur {

        public static $EPUISE     = 0;
        public static $SANS_PIECE = 1;
        public static $A_PIECE    = 2;
        public static $VENDU      = 3;

        public $nombre = 0;

        public function __construct(int $nombre) {
            $this->nombre = $nombre;
            if ($nombre > 0) {
                $this->etat = self::$SANS_PIECE; 
            } else {
                $this->etat = self::$EPUISE;
            }
        }

        public function insererPiece() {
            if ($this->etat == self::$A_PIECE) {
                echo "<br>Vous ne pouvez plus insérer de pièce";
            } else if ($this->etat == self::$SANS_PIECE) {
                $this->etat = self::$A_PIECE;
                echo "<br>Vous avez insérez une pièce";
            } else if ($this->etat == self::$EPUISE) {
                echo "<br>Vous ne pouvez pas insérez de pièce, nous sommes en rupture de stock";
            } else if ($this->etat == self::$VENDU) {
                echo "<br>Veuillez patienter le bonbon va tomber";
            }
        }

        public function ejecterPiece() {
            if ($this->etat == self::$A_PIECE) {
                $this->etat = self::$SANS_PIECE;
                echo "<br>Pièce retournée";
            } else if ($this->etat == self::$SANS_PIECE) {
                echo "<br>Vous n'avez pas insérez de pièce";
            } else if ($this->etat == self::$EPUISE) {
                echo "<br>Vous n'avez pas inséré de pièce";
            } else if ($this->etat == self::$VENDU) {
                echo "<br>Vous avez déjà tourné la poignée";
            }
        }

        public function tournerPoignee() {
            if ($this->etat == self::$A_PIECE) {
                $this->etat = self::$VENDU;
                echo "<br>Vous avez tourné";
                $this->delivrer();
            } else if ($this->etat == self::$SANS_PIECE) {
                echo "<br>Vous avez tourné mais il n'y a pas de pièces";
            } else if ($this->etat == self::$EPUISE) {
                echo "<br>Vous avez tourné mais il n'y a pas de bonbons";
            } else if ($this->etat == self::$VENDU) {
                echo "<br>Inutile de tourner deux fois";
            }
        }

        public function delivrer() {
            if ($this->etat == self::$VENDU) {
                echo "<br>Un bonbon va sortir";
                $this->nombre = $this->nombre -1;
                if ($this->nombre == 0) {
                    echo "<br>Aïe plus de bonbons !";
                    $this->etat = self::$EPUISE;
                } else {
                    $this->etat = self::$SANS_PIECE;
                }
            } else if ($this->etat == self::$SANS_PIECE) {
                echo "<br>Il faut payer d'abord";
            } else if ($this->etat == self::$EPUISE) {
                echo "<br>Pas de bonbon délivré";
            } else if ($this->etat == self::$A_PIECE) {
                echo "<br>Pas de bonbon délivré";
            }
        }

    }

?>