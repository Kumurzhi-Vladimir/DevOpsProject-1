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
					<a class="call" data-remodal-target="firstModal" hidefocus="true" style="outline: none;">ZAkazat ������</a> | 
					<a class="phone" href="tel:+380933857358" hidefocus="true" style="outline: none;">+38-093-385-73-58</a> | 
					<a class="phone" href="tel:+380938862135" hidefocus="true" style="outline: none;">+38-093-886-21-35</a> | 
					<a class="phone" href="mailto:info@mail.com" hidefocus="true" style="outline: none;">info@mail.com</a>
                    <a class="phone" href="registration.php" hidefocus="true" style="outline: none; float: right;">�����������</a> 
                    <a class="phone" href="" hidefocus="true" style="outline: none; float: right; margin-right: 10px;">����</a>
                    <div id="block-top-auth">
                    <form method="post">
                    
                    <ul id="input-email-pass">
                    <h3>����</h3>
                    <p id="message-auth">�������� ����� �(���) ������</p>
                    <li><center><input type="text" id="auth_login" placeholder="����� ��� E-mail"/></center></li>
                    <li><center><input type="text" id="auth_pass" placeholder="������"/><span id="button-pass-show-hide" class="pass-show"></span></center></li>
                    <ul id="list-auth">
                    <li><input type="checkbox" name="rememberme" id="rememberme" /><label for="rememberme">��������� ����</label></li>
                    <li><a id="remindpass" href="#">������ ������?</a></li>
                    </ul>  
                    <p align="right" id="button-auth"><a>����</a></p>
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
				<div class="information"><span class="title">"��������"</span><span> - ��������� �����, �� ����� ������ ����� � ��.- ��������� �����, �� ����� ������ ����� � ��.- ��������� �����, �� ����� ������ ����� � ��.- ��������� �����, �� ����� ������ ����� � ��.</span></div>
			</div>
		</div>     
	</div>
	<nav class="navbar navbar-static-top" style="background-color: #12aaeb; margin-bottom: 0;">
      <div class="container">
      			<form id="block-search" method="GET" action="search.php?q=">
            		<input type="text" id="input-search" name="q" placeholder="����� �� �����"/>
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
            	<li><a href="merchandise.php">������� �������</a></li>
            	<li><a href="#">����</a></li>
            	<li><a href="#">� ��������</a></li>
            	<li><a href="#">����� ������</a></li>
            	<li><a href="#">��������</a></li>
           		<li><a href="#">���� ������������</a></li>	
        	</ul>
        	
        </div>
      </div>
    </nav>
    <div class="container-fluid">
    	<div class="container ordering">
    		<h1>���-�� ���������? ����� ��� � ���!</h1>
    		<hr width="35%"/>
    		<h2>��������� ���� �������<br>����������� ����� 50���.<br>����� ������� ������</h2>
    		<a class="button01" style=" width: 100%; max-width: 244px; outline: none;" data-remodal-target="firstModal" hidefocus="true">�������� ������</a>
    	</div>
    	<div class="container advantages">
			<ul>
				<li><a></a>����������� ������������ ������</li>
				<li><a></a>������� �����</li>
				<li><a></a>������������� ����� �������</li>
			</ul>
		</div>
		<div class="container selling">
    		<h1>� ��� ���� �� ������ �������<br>������� �� ������ ��������?</h1>
    		<hr width="35%"/>
    		<h2>���������� � �� �� �������<br>��� ������<br>��� ���� ������</h2>
    		<a class="button01" style=" width: 100%; max-width: 244px; outline: none;" data-remodal-target="firstModal" hidefocus="true">�������� �������</a>
    	</div>
	    <div>
	      	<span style="display: block;"><img src="img/tech02prog.jpg" alt="tech background" style="display: block; width: 100%; height: 100%; margin: 0 auto;"></span>
	    </div>
	    <div class="container selling">
	    	<h1>������ ������� �����, ��� ��������?</h1>
	    	<hr width="35%"/>
		    <div class="compare">
		    	<ul>
		      		<h2 class="comparison">�������</h2>
		        	<li><i class="fas fa-check" style="font-size: 18px;color: #12aaeb; margin-right: 5px;"></i>�������� �����</li>
		        	<li><i class="fas fa-check" style="font-size: 18px;color: #12aaeb; margin-right: 5px;"></i>�� ������ �������� �����</li>
		        	<li><i class="fas fa-check" style="font-size: 18px;color: #12aaeb; margin-right: 5px;"></i>�� �������</li>
		      	</ul>
		    	<ul>
		    		<h2 class="comparison">��������</h2>
		    		<li><i class="fas fa-times" style="font-size: 18px;color: #808080; margin-right: 5px;"></i>��� ������</li>
		    		<li><i class="fas fa-times" style="font-size: 18px;color: #808080; margin-right: 5px;"></i>��������� �����</li>
		    		<li><i class="fas fa-times" style="font-size: 18px;color: #808080; margin-right: 5px;"></i>������ �������</li>
		    	</ul>
		    </div>
		    <a class="button01" style=" width: 100%; max-width: 354px; outline: none;" data-remodal-target="firstModal" hidefocus="true">���� �������? �������� � ���!</a>
	    </div>
	    <div class="container location">
	    	<div class="address">
	    		<ul>
			    	<li><span>�����: </span>������� � ��������</li>
			    	<li><span>��-��: </span>09:00 - 18:00</li>
			    	<li><span>���: </span><a href="tel:+380933857358" hidefocus="true">+38-093-385-73-58</a></li>
			    	<li><span>Email: </span>chinilka@gmail.com</li>
			    	<li><span>"��������"</span>- ��������� �����, �� ����� ������ ����� � ��.- ��������� �����, �� ����� ������ ����� � ��.- ��������� �����, �� ����� ������ ����� � ��.- ��������� �����, �� ����� ������ ����� � ��.</li>
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
			<span class="developers">� eto nash sayt suka, esli spizdish - mi naydem tebya i uyebem, 2018</span>
		</div>
    </footer>
  </div>
</body>
</html>
