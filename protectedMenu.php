<?php

session_start();

if(!isset ($_SESSION['email']))
{
	header("Location: index.html");

}

?>


<!DOCTYPE html>
<html lang="es-ES">
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="icono.png"/>
	<title>Our menu</title>
</head>
	<header>
		<div class="titulofijo">
		<h1>Bar el sindicat</h1>
		<h2>Enjoy our gastronomic experience</h2>
		</div>
	</header>
<body>
	<div id="navegadorfijo">
	<nav>
		<ul type="circle"> <!--Lista para declarar el navegador fijo que irá arriba-->
			<li> <a href="protected.php" style="color:white">Main page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="protectedMenu.php" style="color:white">Menu</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="protectedAU.php" style="color:white"> About us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="buyOnline.php" style="color:white"> Buy online</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="show_profile.php" style="color:white"> Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="protectedContact.php" style="color:white">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <form action="logout.php"><input type="submit" value="Log out"></form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		</ul>
	</nav>
	</div>
	<div class="indicecarta">
	<section>							<!--Indice de la carta-->
			<br><br><h1><b><u>OUR MENU</u></b></h1><br>
			<ol>

				<li> <a href="#ParaPicar" style="color:black">To snack</a></li>
					<ul class="identacion">
						<li>Bravas chips</li>
						<li>Frite squids</li>
						<li>Rabas</li>
						<li>Roman squids</li>
						<li>Grilled cuttlefish</li>
						<li>Chicken or ham croquetas</li>
						<li>Dried meat croquetas</li>
						<li>Chicken fingers</li>
						<li>Cod carpaccio</li>
					</ul>
				<li> <a href="#Ensaladas" style="color:black">Salads</a></li>
					<ul class="identacion">
						<li>Sindicat</li>
						<li>Green salad</li>
						<li>Caesar salad</li>
					</ul>
				<li> <a href="#Tablas" style="color:black">Tables</a></li>
					<ul class="identacion">
						<li>Teruel ham</li>
						<li>Sausages from Teruel</li>
						<li>Extra of bread with tomatoe</li>
					</ul>
				<li> <a href="#Bocadillos" style="color:black">Sandwich</a></li>
					<ul class="identacion">
						<li>Special K</li>
						<li>Carrer major</li>
						<li>Serranito</li>
						<li>Sindicat</li>
						<li>Frankfurt</li>
					</ul>
				<li> <a href="#Hamburguesas" style="color:black">Burguers</a></li>
					<ul class="identacion">
						<li>Cabrera</li>
						<li>Complete</li>
						<li>BBQ</li>
						<li>Egg</li>
						<li>Guacamole</li>
					</ul>
				<li> <a href="#Torradas" style="color:black">Toasts</a></li>
					<ul class="identacion">
						<li>Tuna escalivada</li>
						<li>Anchovies escalivada</li>
						<li>Vinegar anchovies</li>
						<li>Sirloin</li>
						<li>Sausage with cheese</li>
						<li>Loin with cheese</li>
					</ul>
			</ol><br><br>
		</section>
	</div>



	<section>
		<div class="slideshow">
			<img name="slider" width="800" height="350">

			<script src="slideshow.js"></script>
		</div>
	</section>




	<section>
		<div class="parapicar">
		<h3> <a name="ParaPicar" id="ParaPicar"><u>TO SNACK</u></a></h3><br>				<!--Seccion de para picar en una tabla-->
		<table border="5" width="1000" style="margin: 0 auto;">				<!--Colocamos la tabla en el centro de la página-->
			<thead>
 				<tr>
    				<th>Bravas chips<br>5,00€<br><br></th> 
    				<th>Frite squids<br>7,90€<br><br></th>
    				<th>Rabas<br>6,90€<br><br></th>
  				</tr>
			</thead>
			<tbody>
  				<tr>
    				<th>Roman squids<br>6,90€<br><br></th>
    				<th>Grilled cuttlefish<br>9,00€<br><br></th>
    				<th>Chicken or ham croquetas<br><br>5,00€</th>
  				</tr>
  				<tr>
    				<th>Dried meat croquetas<br>6,00€</th>
    				<th>Chicken fingers<br>6,50€</th>
   					<th>Cod carpaccio<br>8,50€</th>
  				</tr>
			</tbody>
		</table><br><br><br><br>
	</div>
	</section>
	<section>
		<div class="ensaladas">
		<h3> <a name="Ensaladas" id="Ensaladas"><u>SALADS</u></a></h3><br>			<!--Seccion de ensaladas en una tabla-->
		<table border="5" width="1000" style="margin: 0 auto;">
			<thead>
 					<tr>
    					<th>Sindicat salad<br><i>Baby sprouts, pipes, walnuts, raisins, bacon and goat cheese</i><br>7,00€</th>
    					<th>Green salad<br><i>Lettuce, olives, tomato and tuna</i><br>6,50€</th>
    					<th>Caesar salad<br><i>Baby sprouts, chicken, croutons, Parmesan cheese, cherry tomato and Caesar sauce</i><br>7,00€</th>
  					</tr>
			</thead>
		</div>
		</table><br><br><br><br>
	</section>
	<section>
		<div class="tablas">
		<h3> <a name="Tablas" id="Tablas"><u>TABLES</u></a></h3><br>				<!--Seccion de tablas en una tabla-->
		<table border="5" width="1000" style="margin: 0 auto">
			<thead>
  				<tr>
    				<th>Teruel ham<br>9,00€</th>
    				<th>Sausages from Teruel<br>12,00€</th>
   		 			<th>Extra of bread with tomatoe<br>2,00€</th>
 				 </tr>
			</thead>
		</div>
		</table><br><br><br><br>
	</section>
	<section>
		<div class="bocadillos">
		<h3> <a name="Bocadillos" id="Bocadillos"><u>SANDWICH</u></a></h3><br>			<!--Seccion de bocadillos en una tabla-->
		<table border="5" width="1000" style="margin: 0 auto">
			<thead>
  				<tr>
   					<th>Special K<br>Chicken breast, lettuce and mayonnaise<br>6,50€<br><br></th>
    				<th>Carrer Major<br>Roman squid and brava sauce<br>7,00€<br><br></th>
   					<th>Serranito<br>Loin, pepper and serrano ham<br>7,00€<br><br></th>
  				</tr>
			</thead>
			<tbody>
  				<tr>
   					<th>Sindicat<br>Bacon, cheese and onion<br>6,50€</th>
    				<th></th>
    				<th>Frankfurt<br>7,00€</th>
  				</tr>
			</tbody>
		</div>
		</table><br><br><br><br>
	</section>
	<section>
		<div class="hamburguesas">
		<h3> <a name="Hamburguesas" id="Hamburguesas"><u>BURGERS</u></a></h3><br> <!--Sección de hamburguesas en una tabla -->
		<table border="5" width="1000" style="margin: 0 auto">
			<tbody>
  				<tr>
   					<th>Cabrera<br>Goat cheese and caramelized onion<br>6,90€<br><br></th>
    				<th>Complete<br>Lettuce, tomato, onion and cheese<br>6,90€<br><br></th>
    				<th>BBQ<br>Cheddar cheese, bacon, onion and barbecue sauce<br>6,90€<br><br></th>
  				</tr>
  				<tr>
    				<th>Egg<br>Bacon, queso, lettuce and frite egg<br>7,50€</th>
    				<td></td>
    				<th>Guacamole<br>Double Cheddar Cheese and Guacamole<br>6,90€</th>
  				</tr>
			</tbody>
		</div>
		</table><br><br><br><br>
	</section>
	<section>
		<div class="torradas">
		<h3> <a name="Torradas" id="Torradas"><u>TOASTS</u></a></h3><br> <!--Sección de torradas en una tabla -->
		<table border="5" width="1000" style="margin: 0 auto">
		<tbody>
		  <tr>
		    <th>Tuna escalivada<br>7,00€</th>
		    <th>Anchovies escalivada<br>7,50€</th>
		    <th>Vinegar anchovies<br>7,00€</th>
		  </tr>
		  <tr>
		    <th>Roquefort sirloin<br>8,00€</th>
		    <th>Sausage and cheese<br>8,50€</th>
		    <th>Loin and cheese<br>7,50€</th>
		  </tr>
		</tbody>
		</div>
		</table>
		</section>
		<div class="copy">
	<footer> <!--Footer -->
		Author: Iván Menacho Domínguez Subject: SAW (Erasmus at Genoa) Copyright &copy;	
	</footer>
	</div>
		</body>
		</html>