<?php

    require_once '../global.php';

    try{
        header("Location: registerWorkOfArt.php");
        require_once '../classes/WorkOfArt.php';
        require_once '../classes/Image.php';
        $workOfArt = new WorkOfArt($_POST['txtDesc'], $_POST['slctCategory'], 
        $_POST['slctPeriod'], $_POST['slctAutor'], $_POST['txtTitleArt']);
        $workOfArt->insertDB($workOfArt);


        $currentCodArt = $workOfArt->currentCodArt($workOfArt);
        $total = count($_FILES['image']['name']);

        for($i = 0; $i < $total; $i++){
            $image = new Image($_POST['txtDesc'], 'images/' . $_FILES['image']['name'][$i], intval($currentCodArt[0][0]));
            move_uploaded_file($_FILES['image']['tmp_name'][$i], 'images/' . $_FILES['image']['name'][$i]);
            echo $image->insertDB($image) . "<br>";
        }

    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>