<?php

include("bd/conexao.php");
// upload de fotos em veiculos
if (isset($_POST['natureza'])) {

    if (isset($_FILES['imagem'])) {

        $imagem = $_FILES['imagem'];

        for ($cont = 0; $cont < count($imagem['name']); $cont++) {

            //diretorio que a foto está

            $direto = "bd/imagens/natureza/" . $imagem['name'][$cont];

            move_uploaded_file($imagem['tmp_name'][$cont], $direto);

            //salvando no banco de dados

            $dire = $imagem['name'][$cont];

            $result_arq = "INSERT INTO natureza (imagem) VALUES ('$dire')";

            $insert_msg = $pdo->prepare($result_arq);

            $insert_msg->execute();
        }
    }
}


// upload de fotos em veiculos
if (isset($_POST['veiculos'])) {

    if (isset($_FILES['imagem'])) {

        $imagem = $_FILES['imagem'];

        for ($cont = 0; $cont < count($imagem['name']); $cont++) {

            //diretorio que a foto está

            $direto = "bd/imagens/veiculos/" . $imagem['name'][$cont];

            move_uploaded_file($imagem['tmp_name'][$cont], $direto);

            //salvando no banco de dados

            $dire = $imagem['name'][$cont];

            $result_arq = "INSERT INTO veiculos (imagem) VALUES ('$dire')";

            $insert_msg = $pdo->prepare($result_arq);

            $insert_msg->execute();
        }
    }
}

// upload de fotos animais
if (isset($_POST['animais'])) {

    if (isset($_FILES['imagem'])) {

        $imagem = $_FILES['imagem'];

        for ($cont = 0; $cont < count($imagem['name']); $cont++) {

            //diretorio que a foto está

            $direto = "bd/imagens/animais/" . $imagem['name'][$cont];

            move_uploaded_file($imagem['tmp_name'][$cont], $direto);

            //salvando no banco de dados

            $dire = $imagem['name'][$cont];

            $result_arq = "INSERT INTO animais (imagem) VALUES ('$dire')";

            $insert_msg = $pdo->prepare($result_arq);

            $insert_msg->execute();
        }
    }
}

// upload de fotos de wallpepers diversos
if (isset($_POST['fundotela'])) {

    if (isset($_FILES['imagem'])) {

        $imagem = $_FILES['imagem'];

        for ($cont = 0; $cont < count($imagem['name']); $cont++) {

            //diretorio que a foto está

            $direto = "bd/imagens/fundotela/" . $imagem['name'][$cont];

            move_uploaded_file($imagem['tmp_name'][$cont], $direto);

            //salvando no banco de dados

            $dire = $imagem['name'][$cont];

            $result_arq = "INSERT INTO fundotela (imagem) VALUES ('$dire')";

            $insert_msg = $pdo->prepare($result_arq);

            $insert_msg->execute();
        }
    }
}



?>
<!DOCTYPE HTML>

<html>

<head>

	<meta charset="UTF-8">
	<title>Upload</title>

	<!--Importando css-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--Importando fonte-->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">

		<!--Chamando bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

	<!--Add favicon-->
	<link rel="shortcut icon" href="imgs/favicon.png" />

	<!--JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</head>

<body>


	<!--Menu-->
	<header class="navbar">
		
		<div class="logo">
			<a href="index.html"><img src="imgs/logobranco.png" class=""></a>

		</div>

		<nav id="menu">
			<ul class="menu">
				<li ><a href="albuns.php">ÁLBUNS </a></li>
                <li><a href="upload.php">UPLOAD</a></li>

			</ul>
		</nav>

	</header>

    
  
    <div class="container-fluid">

     <h3> Upload de Fotos </h3>
     
     <form method="POST" action="" enctype=multipart/form-data> <h4> Upload Imagens de natureza</h4>
            <div class="form-group">
             
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem[]" multiple="multiple">
            </div>

            <input type="submit" value="Enviar" name="natureza">


            <a href="albuns/natureza.php">conferir fotos</a>

        
        </form>

    

    <br><br>
    <hr><br><br>

    

        <form method="POST" action="" enctype=multipart/form-data> <h4> Upload Imagens de veiculos</h4>
            <div class="form-group">
             
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem[]" multiple="multiple">
            </div>

            <input type="submit" value="Enviar" name="veiculos">


            <a href="albuns/veiculos.php">conferir fotos</a>

        
        </form>

    

    <!--name="imagem[]" multiple="multiple" -->
    <br><br>
    <hr><br><br>

    <!--form upload animais-->
    

        <form method="POST" action="" enctype=multipart/form-data> <h4> Upload Imagens de animais</h4>
            <div class="form-group">
           

                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem[]" multiple="multiple">
            </div>

            <input type="submit" value="Enviar" name="animais">


            <a href="albuns/animais.php">conferir fotos</a>

  

        </form>

    </div>
</div>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">


<!-- Footer Links -->
<div class="container-fluid text-center">

    <div class="logo2">

        <img  src="imgs/logopreto.png" class="img-fluid">
    

    </div>

    <h5>Sobre nós</h5>
    <p> Nossa missão é disponibilizar de forma online, albuns de fotos de <br> diversos gêneros 
        que os usuários possam contribuir fazendo o upload de imagens.
    </p>
    <!-- Links -->
    <div class="contatos">

        <h5>Contatos</h5>

        <img src="imgs/telefone.png" class="img-fluid"> (88) 8745-3645

        <img src="imgs/localização.png" class="img-fluid"> Bahia - Brazil

        <img src="imgs/email.png" class="img-fluid">albumfotos@email.com

        <img src="imgs/insta.png" class="img-fluid" id="insta">@albumfotos



    </div>

</div>
<!-- Grid column -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© Todos os direitos reservados.

</div>
<!-- Copyright -->

</footer>


</body>