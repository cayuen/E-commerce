<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/general.css">
		<link rel="stylesheet" type="text/css" href="../css/backgrounds.css">
		<link rel="stylesheet" type="text/css" href="../css/text.css">
	</head>

	<div class="background-3">	
		<!-- .................. HEADER ............... -->
		<header>
			<div class="logo">
				<a href="index.html"><img src="../img/logo.png"></a>
			</div>
			<nav>
				<a class="orange" href="cart.html">Cart</a>
				<a class="orange" href="products.html">Products</a>
				<a class="orange" href="team.html">Team</a>
				<a class="orange" href="about.html">About</a>
			</nav> 
		</header>

		<!-- .................. CONTENT ............... -->
		<section>
			<p class="page-title orange"><span>RISE</span></p>
			
			<!-- Display of item (left: picture, right: description and form) -->
			<table id="item-details"> <!-- Stored in a 1 x 2 table -->
				<tr>
					<td>
						<img src = "../img/food-4.png"></a>
					</td>
					<td>
						Produced on 1" thick canvas with a glossy finish.<br>
						$18.99<br>
						24" x 36"<br>

						<!-- Drop down for size -->

						<!-- Drop down for quantity -->
						
						<!-- Order form -->
						<form>
						    <label for="firstname">* First Name</label>
						    <input type="text" id="firstname" required><br>
						    <label for="lastname">* Last Name</label>
						    <input type="text" id="lastname" required><br>
						    <label for="phone">* Phone Number</label>
						    <input type="text" id="phone" required><br>
						    <label for="address">* Shipping Address</label>
						    <input type="text" id="address" required><br>
						    <label for="creditcard">* Credit Card</label>
						    <input type="text" id="creditcard" required><br>

						    <!-- Multiple choice for shipping options -->
						    <p>Shipping Method</p>
							<div>
						        <input type="radio" name="x" id="y" value="A" />
						        <label for="y">Overnight </label>
						    </div>		    
						    <div>
						        <input type="radio" name="x" id="y" value="B" />
						        <label for="y">2-days Expedited</label>
						    </div>
						    <div>
						        <input type="radio" name="x" id="y" value="C" />
						        <label for="y">6-days Ground</label>
						    </div><br>      
							
						    <input type="submit" value="Submit">
						</form>
					</td>
				</tr>
			</table>
		<section>
	</div>
</html>