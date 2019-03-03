<?php
	include("include/db_connect.php");
    include("functions/functions.php");
    
    $cat = clear_string($_GET["cat"]);
    $type = clear_string($_GET["type"]); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
  <title>Поиск по параметрам</title>
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
		<div id="block-body">
    <ul id="block-tovar-grid" >
        
        <?php
        if ($_GET["brand"])
        {
            $check_brand = implode(',',$_GET["brand"]);
        }
        $start_price = (int)$_GET["start_price"];
        $end_price = (int)$_GET["end_price"];
        
        if (!empty($check_brand) OR !empty($end_price))
        {
          if  (!empty($check_brand)) $query_brand = " AND brand_id IN($check_brand)";
          if  (!empty($end_price)) $query_price = " AND price BETWEEN $start_price AND $end_price";
        }
        
	$result = mysql_query("SELECT * FROM table_products WHERE visible='1' $query_brand $query_price ORDER BY products_id DESC",$link); 
        
        if (mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
            do 
            {
                
                if  ($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
                {
                    $img_path = './uploads_images/'.$row["image"];
                    $max_width = 200;
                    $max_height = 200;
                    list($width, $height) = getimagesize($img_path);
                    $ratioh = $max_height/$height;
                    $ratiow = $max_width/$width;
                    $ratio = min($ratioh, $ratiow);
                    $width = intval($ratio*$width);
                    $height = intval($ratio*$height);
                }else
                {
                    $img_path = "/img/no-image.jpg";
                    $width = 275;
                    $height = 275;
                }    
                            
                echo '
                
                <li> 
                <div class="block-images-grid" >
                <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
                
                </div>
                <p class="style-title-grid" ><a href="" >'.$row["title"].'</a></p>
                <ul class="reviews-and-counts-grid">
                <li><img src="/img/eye.png" /><p>0</p></li>
                <li><img src="/img/chat.png" /><p>0</p></li>
                </ul>
                <a class="add-cart-style-grid" ></a>
                <p class="style-price-grid" ><strong>'.$row["price"].'</strong> грн.</p>
                <div class="mini-features" >
                '.$row["mini_features"].'
                </div>
                </li>
                 
                ';
            }
            while ($row = mysql_fetch_array($result));
            
        }	
        else
        {
            echo '
            <h3>На данный момент в данной категории нет товаров</h3>
            ';
        }
    ?>
    
    </ul>
        </div>
		<div id="block-category">
			<h2>Категории товаров</h2>
			<ul class="accordion-menu">
			  <li>
			    <div class="dropdownlink"><svg class="fas fa-tablet" aria-hidden="true"></svg> Mobile
			      <svg class="fas fa-chevron-down" aria-hidden="true"></svg>
			    </div>
			    <ul class="submenuItems">
                <li><a href="view_cat.php?type=mobile"><strong>Все модели</strong></a></li>
	  <?php
              
    	$result = mysql_query("SELECT * FROM category WHERE type='mobile'",$link); 
        
        if (mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
            do 
            {
                            
                echo '
                 
            <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                 
                ';
            }
            while ($row = mysql_fetch_array($result));
        }		
                   
       ?>  
			    </ul>
			  </li>
			  <li>
			    <div class="dropdownlink"><svg class="fas fa-laptop" aria-hidden="true"></svg> Laptop
			      <svg class="fas fa-chevron-down" aria-hidden="true"></svg>
			    </div>
			    <ul class="submenuItems">
                <li><a href="view_cat.php?type=notebook"><strong>Все модели</strong></a></li>
			     <?php
              
    	$result = mysql_query("SELECT * FROM category WHERE type='notebook'",$link); 
        
        if (mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
            do 
            {
                            
                echo '
                 
            <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                 
                ';
            }
            while ($row = mysql_fetch_array($result));
        }	
                   
       ?>  
			    </ul>
			  </li>
			  <li>
			    <div class="dropdownlink"><svg class="fas fa-print" aria-hidden="true"></svg> Printer
			      <svg class="fas fa-chevron-down" aria-hidden="true"></svg>
			    </div>
			    <ul class="submenuItems">
                <li><a href="view_cat.php?type=printer"><strong>Все модели</strong></a></li>
			     	     <?php
              
    	$result = mysql_query("SELECT * FROM category WHERE type='printer'",$link); 
        
        if (mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
            do 
            {
                            
                echo '
                 
            <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                 
                ';
            }
            while ($row = mysql_fetch_array($result));
        }	
                   
              ?>  
			    </ul>
			  </li>
			  <li>
			    <div class="dropdownlink"><svg class="fas fa-tv" aria-hidden="true"></svg> TV
			      <svg class="fas fa-chevron-down" aria-hidden="true"></svg>
			    </div>
			    <ul class="submenuItems">
                <li><a href="view_cat.php?type=tv"><strong>Все модели</strong></a></li>
			      	     <?php
              
    	$result = mysql_query("SELECT * FROM category WHERE type='tv'",$link); 
        
        if (mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
            do 
            {
                            
                echo '
                 
            <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                 
                ';
            }
            while ($row = mysql_fetch_array($result));
        }	
                
       ?>  
			    </ul>
			  </li>
			</ul>
         <?php
	   include("include/block-parameter.php");
        ?>
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