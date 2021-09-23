<?php

    class Author{

        // Attributes

        private $codAuthor;
        private $nameAuthor;
        private $nationalityAuthor;
        private $bornYearAuthor;
        private $deathYearAuthor;

        // Constructor

        function __construct($nameAuthor, $nationalityAuthor, $bornYearAuthor, $deathYearAuthor){
            $this->setNameAuthor($nameAuthor);
            $this->setNationalityAuthor($nationalityAuthor);
            $this->setBornYearAuthor($this->formatDate($bornYearAuthor));
            if(empty($deathYearAuthor)) $this->setDeathYearAuthor(null);
            else $this->setDeathYearAuthor($this->formatDate($deathYearAuthor));
        }

        // Methods

        public function formatDate($data){
            $dateFormat = substr($data, 6) . "/" . substr($data, 3, 2) . "/" . substr($data, 0, 2);
            return $dateFormat;
        }

        public function insertDB($author){
            require_once 'Connection.php';

            $datas = array($author->getNameAuthor(), $author->getNationalityAuthor(),
                $author->getBornYearAuthor(), $author->getDeathYearAuthor());

            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO tbAuthor(nameAuthor, nationalityAuthor, bornDate, deathDate)
                                                                        VALUES(?, ?, ?, ?)");
            $statement->bindParam(1, $datas[0]);
            $statement->bindParam(2, $datas[1]);
            $statement->bindParam(3, $datas[2]);
            $statement->bindParam(4, $datas[3]);
            $statement->execute();
        }

        public function getAuthor(){
            require_once 'Connection.php';

            $conexao = Connection::getConnection();
            $querySelect = "select codAuthor, nameAuthor from tbAuthor";
            $result = $conexao->query($querySelect);
            $get = $result->fetchAll();
            return $get;
        }

        // Getters

        public function getCodAuthor(){
            return $this->codAuthor;
        }

        public function getNameAuthor(){
            return $this->nameAuthor;
        }

        public function getNationalityAuthor(){
            return $this->nationalityAuthor;
        }

        public function getBornYearAuthor(){
            return $this->bornYearAuthor;
        }

        public function getDeathYearAuthor(){
            return $this->deathYearAuthor;
        }

        // Setters

        public function setCodAuthor($codAuthor){
            $this->codAuthor = $codAuthor;
        }

        public function setNameAuthor($nameAuthor){
            $this->nameAuthor = $nameAuthor;
        }

        public function setNationalityAuthor($nationalityAuthor){
            $this->nationalityAuthor = $nationalityAuthor;
        }

        public function setBornYearAuthor($bornYearAuthor){
            $this->bornYearAuthor = $bornYearAuthor;
        }

        public function setDeathYearAuthor($deathYearAuthor){
            $this->deathYearAuthor = $deathYearAuthor;
        }

    }

?>