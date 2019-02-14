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
				<div class="coluna col5 sidebar">
					<h3>Localização</h3>
					<img src="images/mapa.jpg"/>
					<ul class="sem-padding sem-marcador">
						<li>Rua lina margarida de oliveira</li>
						<li>Bairro Bom retiro</li>
						<li>Paulínia - SP</li>
						</ul>
						<h3>Contato direto</h3>
						<ul class="sem-marcador sem-padding">
							<li>Fone <strong> (99) 9999-9999</strong></li>
							<li>Email <strong> jefersoncemep@gmail.com</strong></li>
							<li>Skype <strong> live:jefersonskycemep</strong></li>

						</ul>
				</div>
				<div class="coluna col7 contato">
					<h2>Envie sua mensagem</h2>
					
					<form action="action_page.php" class="formcontato" >

   						<label for="fname">Seu nome:</label>
   						<input type="text" id="fname" name="nomecompleto" placeholder="Seu nome.. "/>

					    <label for="lname">Seu email:</label>
					    <input type="text" id="lname" name="emailcontato" placeholder="Seu email.."/>

					    <label for="lname">País</label>
					    <input type="text" id="pais" name="pais"/>

					   
					    

					    <label for="cidade">Cidade</label>
					    <select id="cidade" name="cidade">
					      <option value="campinas">Campinas</option>
					      <option value="paulinia">Paulínia</option>
					      <option value="sumare">Sumaré</option>
					    </select>

					    <label for="subject">Mensagem</label>
					    <textarea id="subject" name="subject" placeholder="Escreva sua mensagem. . . " style="height:200px"></textarea>

					    <input type="submit" value="Enviar"/>

 
</form>
					<a href="clientes.php" class="botao">Ver outros trabalhos &raquo;</a>
				</div>

			</section>
		</div>

		<div class="conteudo-extra">
			<div class="linha">
				<div class="coluna col7">
					<section>
						<h2>Método alternativo de contato</h2>
						<p>Caso não consiga me contatar por alguns dos meios acima, possivelmente eu estarei em uma ilha deserta em algum lugar do pacífico.Neste
						caso há duas possibilidades:</p>
						<ol>
							<li>Enviar uma mensagem em uma garrafa</li>
							<li>Tentar um sinal de fumaça</li>

						</ol>
						<p>Mas sinceramente não sei se algum desses métodos será eficiente, tente por sua conta em risco :) </p>

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