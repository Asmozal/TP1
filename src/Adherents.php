<?php
    #!/usr/bin/env php
    declare(strict_types=1);

    class Adherents{
        public $nom = "Bonniot";
        public $prenom = "Thomas";
        public $dateDeNaissance = "21/07/1999";

        /**
         * Adherents constructor.
         * @param string $nom
         * @param string $prenom
         * @param string $dateDeNaissance
         */
        public function __construct($nom, $prenom,$dateDeNaissance)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateDeNaissance = $dateDeNaissance;
        }
    }
?>