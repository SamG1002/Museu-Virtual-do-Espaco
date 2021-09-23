
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css" type="text/css"/>
       
        <title>Registrar obra | MVE</title>
    </head>
    <body id="bodyArt">
        <div id="ArtBg">
            <?php include_once("sessionVerify.php"); ?>
            <div id="backgroundArt">

                <div id="imgBgArt">
                    <h1 id="titleArt">MVE</h1>
                </div>

                <!-- Gambiarra da Jackeline (sqn :3) -->
                <?php
                    require_once '../global.php';
                    try{
                        require_once '../classes/Author.php';
                        require_once '../classes/Period.php';
                        require_once '../classes/Category.php';

                        $author = new Author(null, null, null, null);
                        $pegarAutor = $author->getAuthor();

                        $period = new Period();
                        $periods = $period->getPeriod();

                        $category = new Category();
                        $categories = $category->getCategory();

                    }catch(Exception $e){
                        echo '<pre>';
                            print_r($e);
                        echo '</pre>';
                    echo $e->getMessage();
                    }
                ?>
                <!-- Gambiarra da Jackeline (sqn :3) -->

                <div id="formBgArt">
                    <h3 id="titleFormArt">Cadastre uma obra</h3>

                    <form action="connectionWorkOfArt.php" method="POST" name="workOfArtForm" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div id="leftSideForm">
                            <textarea class="descWArt" name="txtDesc" cols="30" rows="10" placeholder="Descrição (500 chrstrs)" maxlength="500"></textarea>

                            <h3 class="txtForm"><a href="welcome.php">Voltar</a> | <a href="registerAuthor.php">Registrar autor</a></h3>
                        </div>
                        
                        <div id="rightSideForm">
                <input class="inputsAuthorForm" maxlength="30" id="name" type="text" placeholder="Titulo *" autocomplete="off" name="txtTitleArt" ><br>
               <select name="slctCategory" id="category">
                                <option value="0" selected="selected">Categoria *</option>
                                <?php foreach ($categories as $item){?>
                                    <option value= <?php echo $item['codCategory']?>>
                                        <?php echo $item['nameCategory'] ?>
                                    </option>
                                <?php }?>
                            </select>
                            
                            <select name="slctPeriod" id="period">
                                <option value="0" selected="selected">Período *</option>
                                <?php foreach ($periods as $item){?>
                                    <option value= <?php echo $item['codPeriod']?>>
                                        <?php echo $item['namePeriod'] ?>
                                    </option>
                                <?php }?>
                            </select>
                            
                            <select name="slctAutor" id="id">
                                <option value="0" selected="selected">Autor *</option>
                                <?php foreach ($pegarAutor as $pegar){?>
                                    <option value= <?php echo $pegar['codAuthor']?>>
                                        <?php echo $pegar['nameAuthor'] ?>
                                    </option>
                                <?php }?>
                            </select>

                            <div class='input-wrapper' >
                                <label for='input-file' id="file">
                                    Imagem
                                </label>
                                <input class="botaozao" id='input-file' type='file' name='image[]' multiple='multiple'/>
                            </div>

                            <span id='file-name'></span>
                            
                            <input id="btnFormAuthor" class="botaozao" type="submit" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>

            var $input = document.getElementById('input-file'),
            $fileName = document.getElementById('file-name');
            $btn = document.getElementById('btnFormAuthor')

            $input.addEventListener('change', function(){
                alert("Caso possivel, insira imagens com proporcao de 400x400, infelizmente as imagens nao preenchem corretamente :(")
                $fileName.textContent = this.value;
                $btn.style.marginLeft = "15%";
            });

            function validateForm() {
                var desc = document.forms["workOfArtForm"]["txtDesc"].value
                var category = document.forms["workOfArtForm"]["slctCategory"].value
                var period = document.forms["workOfArtForm"]["slctPeriod"].value
                var author = document.forms["workOfArtForm"]["slctAutor"].value

                if(desc == "") {
                    alert("[Campo obrigatório] Você precisa inserir uma descrição!")
                    return false
                }else if(category == 0){
                    alert("[Campo obrigatório] Você precisa escolher uma categoria!")
                    return false
                }else if(period == 0){
                    alert("[Campo obrigatório] Você precisa inserir um período!")
                    return false
                }else if(author == 0){
                    alert("[Campo obrigatório] Você precisa inserir um autor!")
                    return false
                }else{
                    alert("Obra de arte cadastrada com sucesso!")
                    return true;
                }
            }
        </script>
    </body>
</html>