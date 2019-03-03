<?php
	include("include/db_connect.php");
    include("functions/functions.php");
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
  <title>Регистрация</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="trackbar/trackbar.css" rel="stylesheet" type="text/css" />  
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  
  <script type="text/javascript" src="/trackbar/jquery.trackbar.js"></script>
  
  <link href="trackbar/trackbar.css" rel="stylesheet" type="text/css" />  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="navbar-wrapper">
		<div class="container-fluid" style="background-color: #1f1f1f">
			<div class="container info">
				<div style="color: #fff; padding: 10px 10px 0;">
					<a class="call" data-remodal-target="firstModal" hidefocus="true" style="outline: none;">Заказать звонок</a> | 
					<a class="phone" href="tel:+380933857358" hidefocus="true" style="outline: none;">+38-093-385-73-58</a> | 
					<a class="phone" href="tel:+380938862135" hidefocus="true" style="outline: none;">+38-093-886-21-35</a> | 
					<a class="phone" href="mailto:info@mail.com" hidefocus="true" style="outline: none;">info@mail.com</a></div>
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
            	<li><a href="index.html">Главная</a></li>
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
    	<div class="container merchandise">
        <h2 class="h2-title">Регистрация</h2>
        <form method="post" id="form_reg" action="/reg/handler_reg.php">
        
        <p id="reg_message"></p>
        <div id="block-form-registration">
        <ul id="form-registration">
        
        <li>
        <label>Логин</label>
        <span class="star">*</span>
        <input type="text" name="reg_login" id="reg_login"/>
        </li> 
        
        <li>
        <label>Пароль</label>
        <span class="star">*</span>
        <input type="text" name="reg_pass" id="reg_pass"/>
        <span id="genpass">Сгенерировать</span>
        </li> 
        
        <li>
        <label>Фамилия</label>
        <span class="star">*</span>
        <input type="text" name="reg_surname" id="reg_surname"/>
        </li> 
        
        <li>
        <label>Имя</label>
        <span class="star">*</span>
        <input type="text" name="reg_name" id="reg_name"/>
        </li> 
        
        <li>
        <label>Отчество</label>
        <span class="star">*</span>
        <input type="text" name="reg_patronymic" id="reg_patronymic"/>
        </li> 
        
        <li>
        <label>E-mail</label>
        <span class="star">*</span>
        <input type="text" name="reg_email" id="reg_email"/>
        </li> 
        
        <li>
        <label>Мобильный телефон</label>
        <span class="star">*</span>
        <input type="text" name="reg_phone" id="reg_phone"/>
        </li> 
        
        <li>
        <div id="block-captcha">
        
        <img src="/reg/reg_captcha" />
        <input type="text" name="reg_captcha" id="reg_captcha" />
        
        <p id="reloadcaptcha">Обновить</p>
        </div>
        </li>
        
        </ul>
        </div>
        
        <p align="right"><input type="submit" name="reg_submit" id="form_submit" value="Регистрация"/></p>
        
        </form>
        </div>
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
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>