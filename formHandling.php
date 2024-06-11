 <!-- <html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

   <?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
  die("Connection failed: " . conn->connect_error);
}
echo "Connected successfully";

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
}
conn->close();
?>

  </body>
</html> -->
7