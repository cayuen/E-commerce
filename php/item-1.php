<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/general.css">
		<link rel="stylesheet" type="text/css" href="../css/backgrounds.css">
		<link rel="stylesheet" type="text/css" href="../css/text.css">
	</head>

	<script src="../js/script.js"></script>
	<script src="../js/form.js"></script>
	
	<div class="background-3">	
		<!-- .................. PHP HEADER ............... -->
		<header>
			<nav>
				<?php include 'nav-orange.php';?>
			</nav>
		</header>

		<!-- .................. PHP DATA ............... -->
		<?php require_once 'connect_db.php';
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
				"<br>" . $row['price'] . "</p>"


				// attempt insert order into database
				// $sql_order = "INSERT INTO Orders (cust_phone, product_id, quantity, shipping)
				// 		VALUES (818914, 55, 4, "$row['price']")";
				// if(mysqli_query($conn, $sql_order)){
				//     echo "Customer records added successfully.";
				// } else{
				//     echo "ERROR: Could not to execute order query. $sql. " . mysqli_error($conn);
				// }
				;
		}
		mysqli_close($con);

		?>


		<form action="insert_data.php" method="post">
		    <p>
		        <label for="firstName">Full Name:</label>
		        <input type="text" name="name" id="fullName">
		    </p>
		    <p>
		        <label for="phone">Phone Number:</label>
		        <input type="text" name="phone" id="phoneNumber">
		    </p>
		    <p>
		        <label for="street">Street Address:</label>
		        <input type="text" name="street" id="streetAddress">
		    </p>
		    <p>
		        <label for="state">State:</label>
		        <input type="text" name="state" id="state">
		    </p>
		    <p>
		        <label for="zipcode">Zip Code:</label>
		        <input type="text" name="zipcode" id="zipcode">
		    </p>
		    <p>
		        <label for="cc_no">Credit Card Number:</label>
		        <input type="text" name="cc_no" id="cc_no">
		    </p>
		    <p>
		        <label for="cc_exp_month">Expiration Month:</label>
		        <input type="text" name="month" id="month">
		    </p>
		    <p>
		        <label for="cc_exp_year">Expiration Year:</label>
		        <input type="text" name="year" id="year">
		    </p>
		    <p>
		        <label for="cc_cvv">CVV:</label>
		        <input type="text" name="cvv" id="cvv">
		    </p>
		    <input type="submit" value="Submit">

		</form>
						</td>
					</tr>
				</table>
			<section>
		</div>
	</html>
