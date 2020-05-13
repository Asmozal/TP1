<?php
    #!/usr/bin/env php
    declare(strict_types=1);

    class Adherents{
        private $nom = "Bonniot";
        private $prenom = "Thomas";
        private $dateDeNaissance = "21/07/1999";

        private $idNormalise;

        /**
         * Adherents constructor.
         * @param string $nom
         * @param string $prenom
         * @param string $dateDeNaissance
         */

        public function __construct($nom, $prenom, $dateDeNaissance)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateDeNaissance = $dateDeNaissance;
            $this->normaliserID($nom,$prenom,$dateDeNaissance);
        }
        public function normaliserID($nom, $prenom, $dateDeNaissance)
        {
            $this->idNormalise =$nom." ".$prenom." ".$dateDeNaissance;
        }

        /**
         * @return string
         */
        public function getIdNormalise(): string
        {
            return $this->idNormalise;
        }
    }
?>