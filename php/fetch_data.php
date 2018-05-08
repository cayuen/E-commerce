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
			<nav>
				<?php include 'nav-orange.php';?>
			</nav>
		</header>

		<!-- .................. PHP / HTML ............... -->
		<?php
		$servername = "matt-smith-v4";
		$username = "inf124db063";
		$password = "wfnt59hFDjjZ";
		$dbname = "inf124db063";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 1");

		while($row = mysqli_fetch_array($result))
		{
			echo '<section>' .
				"<p class='page-title orange'><span>" . $row['name'] . '</span></p>' .
				"<table id='item-details'>" .
				"<tr>" .
				"<td>" .
				"<img src = '../img/food-1.png'>" .
				"</td>" .
				"<td>" .
				"<br><br><br>" .
				"<p>" . $row['description'] .
				"<br>" . $row['size'] .
				"<br>" . $row['price'] . "</p>";
		}

		mysqli_close($con);
		?>
		
		<!-- .................. CONTENT ............... -->
					
					 <!-- Display of item (left: picture, right: description and form) -->
					<!--<table id="item-details">
						<tr>
							<td>
								<img src = "../img/food-1.png"></a>
							</td>
							<td>
								<br><br><br>
								<?php
									

		
								?>
								<br>
								$18.99<br>
								24" x 36"<br>-->
								

								<!-- Drop down for size -->

								<!-- Drop down for quantity -->
								
								<!-- Order form -->
								<form name="order-form" action='#'>
								    <br><strong>Purchase Method</strong><br>
								    <label for="firstname">* First Name</label>
								    <input type="text" name="firstname" required><br>
								    <label for="lastname">* Last Name</label>
								    <input type="text" name="lastname" required><br>
								    <label for="phone">* Phone Number</label>
								    <input type="text" name="phone" required><br>
								    <label for="address">* Shipping Address</label>
								    <input type="text" name="address" required><br>
								    <label for="creditcard">* Credit Card</label>
								    <input type="text" name="creditcard" required><br>

								    <!-- Multiple choice for shipping options -->
								    <br><strong>Shipping Method</strong><br>
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
									
								    <div class="submit-btn">
								    	<input type="submit" name="submit" value="Submit" onclick="checkCreditCard(document.order-form.creditcard)"/>
								    </div>
								</form>
							</td>
						</tr>
					</table>
				<section>
			</div>
			<script src="../js/script.js"></script>
		</html>


<!-- // $sql = "SELECT id, name, description
// 	FROM Products
// 	ORDER BY id ASC";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. "
// 		- Name: " . $row["name"]. "
// 		- Description: " . $row["description"]. "
// 		- Size: " . $row["size"]. "
// 		- Price: " . $row["price"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();
// ?> -->