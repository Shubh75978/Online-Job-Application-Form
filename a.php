<?php
// define variables and set to empty values
$name = $email = $password = $confirmpassword = $mobilenumber = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $confirmpassword = test_input($_POST["confirmpassword"]);
  $mobilenumber = test_input($_POST["Mobilenumber"]);
  $address = test_input($_POST["address"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br><br>"; 
echo $email;
echo "<br><br>";
echo $password;
echo "<br><br>";
echo $confirmpassword;
echo "<br><br>";
echo $Mobilenumber;
echo "<br><br>";
echo $address;
echo "<br><br>"
echo $submit;
?>