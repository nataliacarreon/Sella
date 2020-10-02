
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$chat =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $chat = test_input($_POST["chat"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Sella</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <input type="text" name="chat" placeholder="Say &quot;Hello Sella&quot;">
  <input type="submit" name="submit" value="Send">  
</form>

<?php
if ($chat == "Hello Sella"){
echo $chat;
} else {
    echo "Sorry you wrote something wrong, but no worry now we know you are a human, try again";
}
?>

</body>
</html>
