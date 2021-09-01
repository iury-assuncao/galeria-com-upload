<!DOCTYPE HTML>

<html>

<head>

	<meta charset="UTF-8">
	<title>Albuns</title>

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

	<!--cabeçalho semec e numero de contato-->

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
	
<div class="albuns">

	<div class="container">

	
	<h1 class='font-weight-light text-center text-lg-left mt-4 mb-0'>Confira os albuns e baixe sua foto!</h1>
	

		<div class="card" style="width: 18rem; display:inline-block">
			<img style=" max-width:100%;max-height:100%; width: auto; height: auto;"class="card-img-top" src="imgs/album/natureza.jpg" alt="Imagem de capa do card">
			<div class="card-body">
				<h5 class="card-title">Natureza</h5>
				<p class="card-text">Confina o album de fotos de natureza.</p>
				<a href="albuns/natureza.php" class="btn btn-primary">Ver Fotos</a>
			</div>
		</div>
		
		<div class="card" style="width: 18rem; display:inline-block">
			<img style=" max-width:100%;max-height:100%; width: auto; height: auto;"class="card-img-top" src="imgs/album/bmw.jpg" alt="Imagem de capa do card">
			<div class="card-body">
				<h5 class="card-title">Veiculos</h5>
				<p class="card-text">Confina o album de fotos de veiculos.</p>
				<a href="albuns/veiculos.php" class="btn btn-primary">Ver Fotos</a>
			</div>
		</div>

		<div class="card" style="width: 18rem; display:inline-block">
			<img style=" max-width:100%;max-height:100%; width: auto; height: auto;"class="card-img-top" src="imgs/album/horses.jpg" alt="Imagem de capa do card">
			<div class="card-body">
				<h5 class="card-title">Animais</h5>
				<p class="card-text">Confina o album de fotos de animais.</p>
				<a href="albuns/animais.php" class="btn btn-primary">Ver Fotos</a>
			</div>
		</div>

		

	</div>

</div>
		<!-- Footer -->
	<footer class="page-footer font-small blue pt-4">


<!-- Footer Links -->
<div class="container-fluid text-center">

	<div class="logo2">

		<img  src="imgs/logopreto.png" >
	

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
<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>
</body>