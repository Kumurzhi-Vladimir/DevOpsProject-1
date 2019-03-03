<?php 
// index.php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8;" />
  <title>Main</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="navbar-wrapper">
		<div class="container-fluid" style="background-color: #1f1f1f">
			<div class="container info">
				<div style="color: #fff; padding: 10px 10px 0;">
					<a class="call" data-remodal-target="firstModal" hidefocus="true" style="outline: none;">ZAkazat звонок</a> | 
					<a class="phone" href="tel:+380933857358" hidefocus="true" style="outline: none;">+38-093-385-73-58</a> | 
					<a class="phone" href="tel:+380938862135" hidefocus="true" style="outline: none;">+38-093-886-21-35</a> | 
					<a class="phone" href="mailto:info@mail.com" hidefocus="true" style="outline: none;">info@mail.com</a>
                    <a class="phone" href="registration.php" hidefocus="true" style="outline: none; float: right;">Регистрация</a> 
                    <a class="phone" href="" hidefocus="true" style="outline: none; float: right; margin-right: 10px;">Вход</a>
                    <div id="block-top-auth">
                    <form method="post">
                    
                    <ul id="input-email-pass">
                    <h3>Вход</h3>
                    <p id="message-auth">Неверный Логин и(или) Пароль</p>
                    <li><center><input type="text" id="auth_login" placeholder="Логин или E-mail"/></center></li>
                    <li><center><input type="text" id="auth_pass" placeholder="Пароль"/><span id="button-pass-show-hide" class="pass-show"></span></center></li>
                    <ul id="list-auth">
                    <li><input type="checkbox" name="rememberme" id="rememberme" /><label for="rememberme">Запомнить меня</label></li>
                    <li><a id="remindpass" href="#">Забыди пароль?</a></li>
                    </ul>  
                    <p align="right" id="button-auth"><a>Вход</a></p>
                    <p align="right" class="auth-loading"><img src="/img/loading.gif" /></p>
                    </ul>
                    </form>
                    </div>
                    </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container" style="padding: 10px 15px;">
				<div class="logo"><img src="img/logo.png" style="width: 80px; height: 80px;"></div>
				<div class="information"><span class="title">"Название"</span><span> - сервисный центр, мы чиним всякую хрень и тд.- сервисный центр, мы чиним всякую хрень и тд.- сервисный центр, мы чиним всякую хрень и тд.- сервисный центр, мы чиним всякую хрень и тд.</span></div>
			</div>
		</div>     
	</div>
	<nav class="navbar navbar-static-top" style="background-color: #12aaeb; margin-bottom: 0;">
      <div class="container">
      			<form id="block-search" method="GET" action="search.php?q=">
            		<input type="text" id="input-search" name="q" placeholder="Поиск по сайту"/>
        			<input type="submit" id="button-search" value="" style="background-image: url(img/search.png);">
        		</form>
        <div class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        	</button>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
        	<ul class="nav navbar-nav">
            	<li><a href="merchandise.php">Каталог товаров</a></li>
            	<li><a href="#">Цены</a></li>
            	<li><a href="#">О компании</a></li>
            	<li><a href="#">Схема работы</a></li>
            	<li><a href="#">Контакты</a></li>
           		<li><a href="#">Наше расположение</a></li>	
        	</ul>
        	
        </div>
      </div>
    </nav>
    <div class="container-fluid">
    	<div class="container ordering">
    		<h1>Что-то сломалось? тогда вам к нам!</h1>
    		<hr width="35%"/>
    		<h2>Приносите свою технику<br>Диагностика всего 50грн.<br>Самый дешевый ремонт</h2>
    		<a class="button01" style=" width: 100%; max-width: 244px; outline: none;" data-remodal-target="firstModal" hidefocus="true">Оставить заявку</a>
    	</div>
    	<div class="container advantages">
			<ul>
				<li><a></a>Гарантируем качественный ремонт</li>
				<li><a></a>Быстрые сроки</li>
				<li><a></a>Отремонтируем любую технику</li>
			</ul>
		</div>
		<div class="container selling">
    		<h1>У вас есть не нужная техника<br>которую вы хотите выкинуть?</h1>
    		<hr width="35%"/>
    		<h2>Оформляйте и мы ее выкупим<br>вам деньги<br>нам ваше старье</h2>
    		<a class="button01" style=" width: 100%; max-width: 244px; outline: none;" data-remodal-target="firstModal" hidefocus="true">Оформить продажу</a>
    	</div>
	    <div>
	      	<span style="display: block;"><img src="img/tech02prog.jpg" alt="tech background" style="display: block; width: 100%; height: 100%; margin: 0 auto;"></span>
	    </div>
	    <div class="container selling">
	    	<h1>Почему продать лучше, чем выкинуть?</h1>
	    	<hr width="35%"/>
		    <div class="compare">
		    	<ul>
		      		<h2 class="comparison">Продать</h2>
		        	<li><i class="fas fa-check" style="font-size: 18px;color: #12aaeb; margin-right: 5px;"></i>Наваришь бабла</li>
		        	<li><i class="fas fa-check" style="font-size: 18px;color: #12aaeb; margin-right: 5px;"></i>Не будешь засорять среду</li>
		        	<li><i class="fas fa-check" style="font-size: 18px;color: #12aaeb; margin-right: 5px;"></i>Не долбоеб</li>
		      	</ul>
		    	<ul>
		    		<h2 class="comparison">Выкинуть</h2>
		    		<li><i class="fas fa-times" style="font-size: 18px;color: #808080; margin-right: 5px;"></i>Нет выгоды</li>
		    		<li><i class="fas fa-times" style="font-size: 18px;color: #808080; margin-right: 5px;"></i>Засоряешь среду</li>
		    		<li><i class="fas fa-times" style="font-size: 18px;color: #808080; margin-right: 5px;"></i>Просто долбоеб</li>
		    	</ul>
		    </div>
		    <a class="button01" style=" width: 100%; max-width: 354px; outline: none;" data-remodal-target="firstModal" hidefocus="true">Есть вопросы? Спросите у нас!</a>
	    </div>
	    <div class="container location">
	    	<div class="address">
	    		<ul>
			    	<li><span>Адрес: </span>Барабан в харькове</li>
			    	<li><span>Пн-Пт: </span>09:00 - 18:00</li>
			    	<li><span>Тел: </span><a href="tel:+380933857358" hidefocus="true">+38-093-385-73-58</a></li>
			    	<li><span>Email: </span>chinilka@gmail.com</li>
			    	<li><span>"Название"</span>- сервисный центр, мы чиним всякую хрень и тд.- сервисный центр, мы чиним всякую хрень и тд.- сервисный центр, мы чиним всякую хрень и тд.- сервисный центр, мы чиним всякую хрень и тд.</li>
			    </ul>
	    	</div>
		    <div id="map"></div>
		    <script>
		      function initMap() {
		        var shop1 = {lat: 49.993925, lng: 36.223845};
		        // Create a map object and specify the DOM element for display.
		        var map = new google.maps.Map(document.getElementById('map'), {
		          center: {lat: 49.993768, lng: 36.221539}, 
		          zoom: 15
		        });
		    	var marker = new google.maps.Marker({
        		position: shop1,
       			map: map
        		});
        		}
		    </script>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdq9R8wLI59zBXocQbKQ5AuULIHgh7kYk&callback=initMap"
		    async defer></script>
		</div>
    </div>

    <footer class="footer" style="background-color: #1f1f1f">
		<div class="container">
			<span class="developers">© eto nash sayt suka, esli spizdish - mi naydem tebya i uyebem, 2018</span>
		</div>
    </footer>
  </div>
</body>
</html>
