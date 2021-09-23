<?php

    class WorkOfArt{

        // Attributes

        private $codWorkOfArt;
        private $titleWorkOfArt;
        private $descWorkOfArt;
        private $codCategory;
        private $codPeriod;
        private $codAuthor;

        // Constructor

        function __construct($descWorkOfArt, $codCategory, $codPeriod, $codAuthor, $titleWorkOfArt){
            $this->setDescWorkOfArt($descWorkOfArt);
            $this->setCodCategory($codCategory);
            $this->setCodPeriod($codPeriod);
            $this->setCodAuthor($codAuthor);
            $this->setTitleWorkOfArt($titleWorkOfArt);
        }

        // Methods

        public function insertDB($workOfArt){
            require_once 'Connection.php';

            $datas = array($workOfArt->getDescWorkOfArt(), $workOfArt->getCodPeriod(), $workOfArt->getCodCategory(),
                $workOfArt->getCodAuthor(), $workOfArt->getTitleWorkOfArt()); 

            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO tbArt(descArt, codPeriod, codCategory, codAuthor, titleArt)
                                                                        VALUES(?, ?, ?, ?, ?)");
            $statement->bindParam(1, $datas[0]);
            $statement->bindParam(2, intval($datas[1]));
            $statement->bindParam(3, intval($datas[2]));
            $statement->bindParam(4, intval($datas[3]));
            $statement->bindParam(5, $datas[4]);
            $statement->execute();
        }

        public function currentCodArt($workOfArt){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT MAX(codArt) FROM tbArt";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        public function getArts(){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT * FROM tbArt";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        public function getAuthor($codArt){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT nameAuthor FROM tbArt 
                                            INNER JOIN tbAuthor ON tbArt.codAuthor = tbAuthor.codAuthor WHERE codArt = $codArt";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        public function getCategory($codArt){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT nameCategory FROM tbArt 
                                            INNER JOIN tbCategory ON tbArt.codCategory = tbCategory.codCategory WHERE codArt = $codArt";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        public function getPeriod($codArt){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT namePeriod FROM tbArt 
                                            INNER JOIN tbPeriod ON tbArt.codPeriod = tbPeriod.codPeriod WHERE codArt = $codArt";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        // Getters

        public function getCodWorkOfArt(){
            return $this->codWorkOfArt;
        }

        public function getDescWorkOfArt(){
            return $this->descWorkOfArt;
        }

        public function getTitleWorkOfArt(){
            return $this->titleWorkOfArt;
        }

        public function getCodCategory(){
            return $this->codCategory;
        }

        public function getCodPeriod(){
            return $this->codPeriod;
        }

        public function getCodAuthor(){
            return $this->codAuthor;
        }

        // Setters

        public function setCodWorkOfArt($codWorkOfArt){
            $this->codWorkOfArt = $codWorkOfArt;
        }

        public function setDescWorkOfArt($descWorkOfArt){
            $this->descWorkOfArt = $descWorkOfArt;
        }

        public function setTitleWorkOfArt($titleWorkOfArt){
            $this->titleWorkOfArt = $titleWorkOfArt;
        }
        
        public function setCodCategory($codCategory){
            $this->codCategory = $codCategory;
        }

        public function setCodPeriod($codPeriod){
            $this->codPeriod = $codPeriod;
        }

        public function setCodAuthor($codAuthor){
            $this->codAuthor = $codAuthor;
        }

    }

?>