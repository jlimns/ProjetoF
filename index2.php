	<?php

	//conexão

	require_once 'db_connect.php';

	//Sessão

	session_start();
	//verificação
	if(!isset($_SESSION['logado'])):
		header('Location: index.php');
	endif;

	//botao enviar
	

?>

	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Portfólio - Desenvolvimento Web</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
		<link href="https://fonts.googleapis.com/css?family=Aleo:300,400,700" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="shortcut icon" href="images/2u.ico"/>
	</head>
	<body>
		<div class="header">
			
			<div class="linha">
				<header>
					<div class="coluna col4">
						<h1 class="logo">2U</h1>


					</div>

					<div class="coluna col8">
						<nav>
							<ul class="menu inline sem-marcador">
								<li><a href="index.php" class="menus">Home</a></li>
								<li><a href="clientes.php"class="menus">Clientes</a></li>
								<li><a href="servicos.php"class="menus">Serviços</a></li>
								<li><a href="sobre.php"class="menus">Sobre</a></li>
								<li><a href="contato.php"class="menus">Contato</a></li>


							</ul>

						</nav>

					</div>
				</header>

			</div>
		</div>
		<div class="linha">
			<section>
				<div class="coluna col3 sidebar">
					<h3>Clientes satisfeitos</h3>
					<ul class="sem-marcador sem-padding">
						<li><a href="">Nome da empresa 1</a></li>
						<li><a href="">Nome da empresa 2</a></li>
						<li><a href="">Nome da empresa 3</a></li>
						<li><a href="">Nome da empresa 4</a></li>
						<li><a href="">Nome da empresa 5</a></li>
						<li><a href="">Nome da empresa 6</a></li>
						<li><a href="">Nome da empresa 7</a></li>
					</ul>
					<a href="cliente.php" class="botao">Ver todos &raquo;</a>
				</div>
				<div class="coluna col6">
					<h2>Ultimo trabalho: <em>Empresa ABC</em></h2>
					<img src="images/thumb-grande.jpg" alt=""/>
					<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
					<a href="clientes.php" class="botao">Ver outros trabalhos &raquo;</a>
				</div>

				<form action="<?php
//encerrando a sessão


session_unset();
session_destroy();

header('Location: index.php');


?>" method="POST">
				<div class="container" style="background-color:#f1f1f1">
						<button type="button" class="cancelbtn" >Sair</button>
			</div>
				</form>


			</section>
		</div>

		<div class="conteudo-extra">
			<div class="linha">
				<div class="coluna col7">
					<section>
						<h2>Como um site pode ajudar sua empresa?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					</section>
				</div>
				<div class="coluna col5">
					<h3>Últimas Notícias</h3>
					<ul class="sem-marcador sem-padding noticias">
						<li>
							<img src="images/thumb-pequena.jpg"/>
							<h4>Título da notícia publicada no blog</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="">Leia mais &raquo;</a></p>
						</li>
						<li>
							<img src="images/thumb-pequena.jpg"/>
							<h4>Título da notícia publicada no blog</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="">Leia mais &raquo;</a></p>
						</li>
						<li>
							<img src="images/thumb-pequena.jpg"/>
							<h4>Título da notícia publicada no blog</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="">Leia mais &raquo;</a></p>
						</li>

					</ul>	

				</div>
			</div>
		</div>
		<div class="footer">
			<div class="linha">
				<footer>
					<div class="coluna col12">
						<span>&copy; 2019 - Jeferson Desenvolvimento Web.</span>
					</div>
				</footer>
			</div>
		</div>

	</body>
	</html>