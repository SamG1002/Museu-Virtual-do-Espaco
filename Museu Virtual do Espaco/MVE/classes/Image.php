<?php

    class Image{

        // Attributes

        private $codImage;
        private $descImage;
        private $pathImage;
        private $nameImage;
        private $codWorkOfArt;
        public $width; // Definida no arquivo index.php, será a largura máxima da nossa imagem
        public $height; // Definida no arquivo index.php, será a altura máxima da nossa imagem
        protected $tipos = array("jpeg", "png", "gif"); // Nossos tipos de imagem disponíveis para este exemplo

        // Constructor

        function __construct($descImage, $pathImage, $codWorkOfArt){
            $this->setDescImage($descImage);
            $this->setPathImage($pathImage);
            $this->setCodWorkOfArt($codWorkOfArt);
        }

        // Methods

        protected function redimensionar($caminho, $nomearquivo){
            // Determina as novas dimensões
            $width = $this->width;
            $height = $this->height;

            // Pegamos a largura e altura originais, além do tipo de imagem
            list($width_orig, $height_orig, $tipo, $atributo) = getimagesize($caminho.$nomearquivo);

            // Se largura é maior que altura, dividimos a largura determinada pela original e multiplicamos a altura pelo resultado, para manter
           // a proporção da imagem
            if($width_orig > $height_orig){
            $height = ($width/$width_orig)*$height_orig;

            // Se altura é maior que largura, dividimos a altura determinada
           // pela original e multiplicamos a largura pelo resultado, para manter
            //a proporção da imagem
            } elseif($width_orig < $height_orig) {
            $width = ($height/$height_orig)*$width_orig;
            } // -> fim if
            // Criando a imagem com o novo tamanho
            $novaimagem = imagecreatetruecolor($width, $height);
            switch($tipo){

            // Se o tipo da imagem for gif
            case 1:
            // Obtém a imagem gif original
            $origem = imagecreatefromgif($caminho.$nomearquivo);
            // Copia a imagem original para a imagem com novo tamanho
            imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $width,
            $height, $width_orig, $height_orig);
            // Envia a nova imagem gif para o lugar da antiga
            imagegif($novaimagem, $caminho.$nomearquivo);
            break;

            // Se o tipo da imagem for jpg
            case 2:
            // Obtém a imagem jpg original
            $origem = imagecreatefromjpeg($caminho.$nomearquivo);
            // Copia a imagem original para a imagem com novo tamanho
            imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $width,
            $height, $width_orig, $height_orig);
            // Envia a nova imagem jpg para o lugar da antiga
            imagejpeg($novaimagem, $caminho.$nomearquivo);
            break;

            // Se o tipo da imagem for png
            case 3:
            // Obtém a imagem png original
            $origem = imagecreatefrompng($caminho.$nomearquivo);
            // Copia a imagem original para a imagem com novo tamanho
            imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $width,
            $height, $width_orig, $height_orig);
            // Envia a nova imagem png para o lugar da antiga
            imagepng($novaimagem, $caminho.$nomearquivo);
            break;
            } // -> fim switch

            // Destrói a imagem nova criada e já salva no lugar da original
            imagedestroy($novaimagem);
            // Destrói a cópia de nossa imagem original
            imagedestroy($origem);
            } // -> fim function redimensionar()

        public function insertDB($image){
            require_once 'Connection.php';

            $datas = array($image->getDescImage(), $image->getPathImage(), $image->getCodWorkOfArt());

            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO tbImage(descImage, pathImage, codArt)
                                                                        VALUES(?, ?, ?)");
            $statement->bindParam(1, $datas[0]);
            $statement->bindParam(2, $datas[1]);
            $statement->bindParam(3, $datas[2]);
            $statement->execute();
        }

        public function getImages($codArt){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT * FROM tbimage WHERE codArt = $codArt";

            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }


        // Getters

        public function getCodImage(){
            return $this->codAuthor;
        }

        public function getDescImage(){
            return $this->descImage;
        }

        public function getPathImage(){
            return $this->pathImage;
        }

        public function getNameImage(){
            return $this->nameImage();
        }

        public function getCodWorkOfArt(){
            return $this->codWorkOfArt;
        }

        // Setters

        public function setCodImage($codImage){
            $this->codImage = $codImage;
        }

        public function setDescImage($descImage){
            $this->descImage = $descImage;
        }

        public function setPathImage($pathImage){
            $this->pathImage = $pathImage;
        }

        public function setNameImage($nameImage){
            $this->nameImage = $nameImage;
        }

        public function setCodWorkOfArt($codWorkOfArt){
            $this->codWorkOfArt = $codWorkOfArt;
        }

    }

?>