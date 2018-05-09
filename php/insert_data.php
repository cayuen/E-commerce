<?php require_once 'connect_db.php';
$servername = "matt-smith-v4";
$username = "inf124db063";
$password = "wfnt59hFDjjZ";
$dbname = "inf124db063";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$full_name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
$street = mysqli_real_escape_string($conn, $_REQUEST['street']);
$state = mysqli_real_escape_string($conn, $_REQUEST['state']);
$zipcode = mysqli_real_escape_string($conn, $_REQUEST['zipcode']);
$cc_no = mysqli_real_escape_string($conn, $_REQUEST['cc_no']);
$cc_exp_month = mysqli_real_escape_string($conn, $_REQUEST['month']);
$cc_exp_year = mysqli_real_escape_string($conn, $_REQUEST['year']);
$cc_cvv = mysqli_real_escape_string($conn, $_REQUEST['cvv']);

// attempt insert customer query execution
$sql_customer = "INSERT INTO Customers (name, phone, street, state, zipcode, cc_no, cc_exp_month, cc_exp_year, cc_cvv)
		VALUES ('$full_name', '$phone', '$street', '$state', '$zipcode', '$cc_no', '$cc_exp_month', '$cc_exp_year', '$cc_cvv')";
if(mysqli_query($conn, $sql_customer)){
    echo "Customer information added to the database!";
} else{
    echo "ERROR: Could not add customer to the database. $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);
?>