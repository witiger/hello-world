<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Инфраструктура</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="PHP || Heroku & GitHub Test">
		<meta name="author" content="Ilya Mikhalev">
		<meta name="robots" content="index, follow">

		<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
	
		<div class="container">
			<div class="header">
				<h1 class="header-heading">Инфраструктура</h1>
			</div>
			<div class="nav-bar">
				<ul class="nav">
					<li><a href="index.php">Прототип</a></li>				
					<li><a href="tech.php">Инфраструктура</a></li>
				</ul>
			</div>
			<div class="content">
				<div class="main">

					<!-- Heading -->				
					<h1>PHP || Heroku & GitHub Test</h1>
					<hr>

					<p><img class="img-responsive" src="assets/img/heroku.jpg" alt=""></p>
					<hr>
					
					<h3>Процесс контроля версий</h3>
					<blockquote>
					<p><code>localhost -> GitHub dev -> Heroku dev -> www (testing)</br>
					GitHub dev -> Merge pull request -> GitHub master -> Heroku Master -> www (production)</code></p>					
						<ol>
							<li>Код пишется на localhost. Затем коммитится на локальный git и дальше в dev ветку GitHub в облаке.</br>
							Результат:</br> 
							<a href="https://github.com/witiger/hello-world/tree/site-edit" target="_blank">https://github.com/witiger/hello-world/tree/site-edit</a></li>
							</br>
							<li>Heroku автоматически выгружает код из dev ветки GitHub в свой dev блок.</br>
							Результат:</br>
							<a href="https://dev-.herokuapp.com/" target="_blank">https://dev-.herokuapp.com/</a></li>
							</br>
							<li>Объединяем dev и master ветки на GitHub.</li>
							</br>
							<li>Heroku автоматически выгружает код из master ветки GitHub в свой master блок.</br>	
							Результат:</br>							
							</br><a href="https://dev-.herokuapp.com/" target="_blank">https://dev-.herokuapp.com/</a></li>
						</ol>
					</blockquote>	
					<hr>	

					<h3>Параметры сервера</h3>
					<table class="table table-striped">
						<?php phpinfo(); ?>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>					
						
			
			<div class="footer">
				&copy; Copyright 2018
			</div>
		</div>
		
	</body>
</html>