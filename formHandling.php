<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <?php
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
      $firstName = test_input($_POST["fname"]);
      $lastName = test_input($_POST["lname"]);
      $email = test_input($_POST["email"]);
        }

    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
    }
    /* Works! No security still but trying to create php without the site leaving  */
    echo <p>'Form created successfully!'</p>;
    ?>
    

</html>