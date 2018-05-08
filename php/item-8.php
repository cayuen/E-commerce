<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/general.css">
		<link rel="stylesheet" type="text/css" href="../css/backgrounds.css">
		<link rel="stylesheet" type="text/css" href="../css/text.css">
	</head>

	<div class="background-3">	
		<!-- .................. PHP HEADER ............... -->
		<header>
			<nav>
				<?php include 'nav-orange.php';?>
			</nav>
		</header>

		<!-- .................. PHP DATA ............... -->
		<?php require_once 'connect_db.php';
		$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 8");
		while($row = mysqli_fetch_array($result))
		{
			echo '<section>' .
				"<p class='page-title orange'><span>" . $row['name'] . '</span></p>' .
				"<table id='item-details'>" .
				"<tr>" .
				"<td>" .
				"<img src = '../img/people-3.jpg'>" .
				"</td>" .
				"<td>" .
				"<br><br><br>" .
				"<p>" . $row['description'] .
				"<br>" . $row['size'] .
				"<br>" . $row['price'] . "</p>";
		}
		mysqli_close($con);
		?>
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