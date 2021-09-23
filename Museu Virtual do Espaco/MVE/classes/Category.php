<?php

    class Category{

        // Attributes

        private $codCategory;
        private $nameCategory;

        // Method

        public function getCategory(){
            require_once 'Connection.php';

            $connection = Connection::getConnection();
            $querySelect = "select codCategory, nameCategory from tbCategory";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        // Getters

        public function getCodCategory(){
            return $this->codCategory;
        }

        public function getNameCategory(){
            return $this->namePeriod;
        }

        // Setters

        public function setCodCategory(){
            $this->codCategory = $codCategory;
        }

        public function setNameCategory($namePeriod){
            $this->namePeriod = $namePeriod;
        }

    }

?>