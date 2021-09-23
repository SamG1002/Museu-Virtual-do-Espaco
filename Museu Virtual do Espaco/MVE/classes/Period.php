<?php

    class Period{

        // Attributes

        private $codPeriod;
        private $namePeriod;

        // Method

        public function getPeriod(){
            require_once 'Connection.php';

            $connection = Connection::getConnection();
            $querySelect = "select codPeriod, namePeriod from tbPeriod";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        // Getters

        public function getCodPeriod(){
            return $this->codPeriod;
        }

        public function getNamePeriod(){
            return $this->namePeriod;
        }

        // Setters

        public function setCodPeriod(){
            $this->codPeriod = $codPeriod;
        }

        public function setNamePeriod($namePeriod){
            $this->namePeriod = $namePeriod;
        }

    }

?>