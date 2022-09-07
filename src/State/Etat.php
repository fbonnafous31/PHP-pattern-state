<?php

    namespace App\State;

    interface Etat {
        public function insererPiece();
        public function ejecterPiece();
        public function tournerPoignee();
        public function delivrer();
    }

?>