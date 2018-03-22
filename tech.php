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

					<h3>Проверка работы сервера</h3>
					<blockquote>					
							<p><code>Версия PHP: <?php phpinfo(); ?></code></p>
							<?php
							echo ("REDIRECT_UNIQUE_ID==");echo (getenv (REDIRECT_UNIQUE_ID));echo ("< br >");
							echo ("QUERY_STRING==");echo (getenv (QUERY_STRING));echo ("< br >");
							echo ("DBENTRY==");echo (getenv (DBENTRY));echo ("< br >");
							echo ("REDIRECT_SCRIPT_URI==");echo (getenv (REDIRECT_SCRIPT_URI));echo ("< br >");
							echo ("HTTP_ACCEPT_LANGUAGE==");echo (getenv (HTTP_ACCEPT_LANGUAGE));echo ("< br >");
							echo ("HTTP_REFERER==");echo (getenv (HTTP_REFERER));echo ("< br >");
							echo ("REDIRECT_SCRIPT_URL==");echo (getenv (REDIRECT_SCRIPT_URL));echo ("< br >");
							echo ("REMOTE_PORT==");echo (getenv (REMOTE_PORT));echo ("< br >");
							echo ("HTTP_ACCEPT==");echo (getenv (HTTP_ACCEPT));echo ("< br >");
							echo ("HTTP_USER_AGENT==");echo (getenv (HTTP_USER_AGENT));echo ("< br >");
							echo ("GATEWAY_INTERFACE==");echo (getenv (GATEWAY_INTERFACE));echo ("< br >");
							echo ("HTTP_HOST==");echo (getenv (HTTP_HOST));echo ("< br >");
							echo ("SCRIPT_URI==");echo (getenv (SCRIPT_URI));echo ("< br >");
							echo ("SCRIPT_NAME==");echo (getenv (SCRIPT_NAME));echo ("< br >");
							echo ("SCRIPT_URL==");echo (getenv (SCRIPT_URL));echo ("< br >");
							echo ("SERVER_NAME==");echo (getenv (SERVER_NAME));echo ("< br >");
							echo ("REDIRECT_STATUS==");echo (getenv (REDIRECT_STATUS));echo ("< br >");
							echo ("UNIQUE_ID==");echo (getenv (UNIQUE_ID));echo ("< br >");
							echo ("HTTP_VIA==");echo (getenv (HTTP_VIA));echo ("< br >");
							echo ("SCRIPT_FILENAME==");echo (getenv (SCRIPT_FILENAME));echo ("< br >");
							echo ("PATH==");echo (getenv (PATH));echo ("< br >");
							echo ("STATUS==");echo (getenv (STATUS));echo ("< br >");
							echo ("SERVER_ADDR==");echo (getenv (SERVER_ADDR));echo ("< br >");
							echo ("SERVER_PROTOCOL==");echo (getenv (SERVER_PROTOCOL));echo ("< br >");
							echo ("HTTP_CONNECTION==");echo (getenv (HTTP_CONNECTION));echo ("< br >");
							echo ("REDIRECT_DBENTRY==");echo (getenv (REDIRECT_DBENTRY));echo ("< br >");
							echo ("SERVER_SIGNATURE==");echo (getenv (SERVER_SIGNATURE));echo ("< br >");
							echo ("PATH_TRANSLATED==");echo (getenv (PATH_TRANSLATED));echo ("< br >");
							echo ("PATH_INFO==");echo (getenv (PATH_INFO));echo ("< br >");
							echo ("SERVER_ADMIN==");echo (getenv (SERVER_ADMIN));echo ("< br >");
							echo ("SERVER_SOFTWARE==");echo (getenv (SERVER_SOFTWARE));echo ("< br >");
							echo ("REMOTE_ADDR==");echo (getenv (REMOTE_ADDR));echo ("< br >");
							echo ("DOCUMENT_ROOT==");echo (getenv (DOCUMENT_ROOT));echo ("< br >");
							echo ("REQUEST_URI==");echo (getenv (REQUEST_URI));echo ("< br >");
							echo ("REDIRECT_URL==");echo (getenv (REDIRECT_URL));echo ("< br >");
							echo ("REQUEST_METHOD==");echo (getenv (REQUEST_METHOD));echo ("< br >");
							echo ("SERVER_PORT==");echo (getenv (SERVER_PORT));echo ("< br >");
							echo ("HTTP_REFERER==");echo (getenv (HTTP_REFERER));echo ("< br >");
							?>							
					</blockquote>

					
				
			<div class="footer">
				&copy; Copyright 2018
			</div>
		</div>
		
	</body>
</html>