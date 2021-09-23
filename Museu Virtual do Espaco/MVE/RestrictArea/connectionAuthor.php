<?php

    require_once '../global.php';

    try{
        header("Location: registerAuthor.php");
        require_once '../classes/Author.php';
        $author = new Author($_POST['txtAuthorName'], $_POST['slctAuthorNationality'], $_POST['txtAuthorBorn'], $_POST['txtAuthorDeath']);
        $author->insertDB($author);
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>