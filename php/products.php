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

		<!-- .................. PHP CONTENT ............... -->
		<section>
			<p class="page-title orange"><span>PRODUCTS</span></p>
			<p class="headline orange">2018 COLLECTION</p>
		
			<!-- Table of products -->
			<table id="product-table">
				<tr>
					<td>
						<a href="item-1.php"><img class="zoom" src = "../img/food-1.png"></a>
						<?php require_once 'connect_db.php';
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 1");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
					<td>
						<a href="item-2.php"><img class="zoom" src = "../img/people-1.jpg"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 2");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
					<td>
						<a href="item-3.php"><img class="zoom" src = "../img/places-1.png"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 3");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
				</tr>
				<tr>
					</td>
					<td>
						<a href="item-4.php"><img class="zoom" src = "../img/food-2.png"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 4");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
					<td>
						<a href="item-5.php"><img class="zoom" src = "../img/people-2.png"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 5");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
					<td>
						<a href="item-6.php"><img class="zoom" src = "../img/places-2.png"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 6");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<a href="item-7.php"><img class="zoom" src = "../img/food-3.jpg"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 7");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
					<td>
						<a href="item-8.php"><img class="zoom" src = "../img/people-3.jpg"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 8");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
					<td>
						<a href="item-9.php"><img class="zoom" src = "../img/places-3.jpg"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 9");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<a href="item-10.php"><img class="zoom" src = "../img/food-4.png"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 10");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
					<td>
						<a href="item-11.php"><img class="zoom" src = "../img/people-4.png"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 11");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
					<td>
						<a href="item-12.php"><img class="zoom" src = "../img/places-4.png"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 12");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
				</tr>
				<tr>	
					<td>
						<a href="item-13.php"><img class="zoom" src = "../img/places-5.png"></a>
						<?php
							$result = mysqli_query($conn,"SELECT * FROM Products WHERE id = 13");
							while($row = mysqli_fetch_array($result)) {
								echo "<p>$" . $row['price'] . 
								"<br>" . $row['size'] . "</p>";
							}
						?>
					</td>
				</tr>
				<?
					mysqli_close($con);
				?>
			</table>
		</section>
	</div>
</html>