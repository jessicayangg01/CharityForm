<?php
// Database credentials
define ('DB_host', 'localhost') ;
define ('DB_user', 'root') ;
define ('DB_password', '') ;
define ('DB_name', 'charity_db') ;

// Create a connection to the database
$conn = mysqli_connect(DB_host, DB_user, DB_password);

// Check the connection
if (!$conn) {
    die("Connection failed with connecting to server: " . mysqli_error());
}
else{
    echo "Loaded into server successfully";
}

$db_conn = mysqli_select_db($conn, DB_name);
if (!$db_conn) {
    die("Connection failed with connecting to database: " . mysqli_error());
}
else{
    echo "Loaded into database successfully";
}


// Data to be inserted
$legalName = $_POST['LegalName'];
$commonName = $_POST['CommonName'];
$street = $_POST['Street'];
$city = $_POST['City'];
$province = $_POST['Province'];
$postal_code = $_POST['Postal_code'];
$url = $_POST['myUrl'];

// SQL query to insert data into the table
$sql = "INSERT INTO CHARITY (LegalName, CommonName, Street, City, Province, Postal_code, URL) VALUES ('$legalName', '$commonName', '$street' , '$city' , '$province' , '$postal_code' , '$url')";

if (!mysqli_query($conn, $sql)) {
    die("Failed to insert data into database: " . mysqli_error());
}

mysqli_close($conn);

?>