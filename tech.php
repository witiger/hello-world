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
					<h1>PHP || Heroku & GitHub Infrastructure</h1>
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
							<a href="https://bimdev1.herokuapp.com/" target="_blank">https://bimdev1.herokuapp.com/</a></li>
							</br>
							<li>Объединяем dev и master ветки на GitHub.</li>
							</br>
							<li>Heroku автоматически выгружает код из master ветки GitHub в свой master блок.</br>	
							Результат:</br>							
							<a href="https://bimmst1.herokuapp.com/" target="_blank">https://bimmst1.herokuapp.com/</a></li>
							</br>
							<li>Profit.</li>
						</ol>
					</blockquote>	
					<hr>	
	
			
			<div class="footer">
				&copy; Copyright 2018
			</div>
		</div>
		
	</body>
</html>