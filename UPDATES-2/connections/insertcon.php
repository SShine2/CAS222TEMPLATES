<html>
<body>
 
 
<?php
    
error_reporting(E_ALL);
ini_set('display_errors', 1);
    
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comments = $_POST['comments'];  
    
$con = @mysql_connect('localhost','sshine','orange');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
    
mysql_select_db("sshine", $con);
 
$sql="INSERT INTO contact (name, phone, email, comments)
VALUES
('$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[comments]')";

    
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
    
    
echo "<p class=\"response\">Thank you " . htmlspecialchars($name) . " for contacting Ace in the Hole MultiSport Events. We will get back to you shortly!</p><a href='../index.php'>HOME</a>";

 
mysql_close($con)
?>
</body>
</html>
