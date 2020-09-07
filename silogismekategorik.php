<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php
// define variables and set to empty values
$sp = $sq = $ditanya = $ditanyak = $p = $q = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sp"])) {
   
  } else {
    $sp = test_input($_POST["sp"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$sp)) {
      
    }
  }
  
  if (empty($_POST["sq"])) {
   
  } else {
    $sq = test_input($_POST["sq"]);
    // check if e-mail address is well-formed
    if (!filter_var($sq, FILTER_VALIDATE_EMAIL)) {
      
    }
  }
    
  if (empty($_POST["q"])) {
    $q = "";
  } else {
    $q = test_input($_POST["q"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$q)) {
     
    }
  }

  if (empty($_POST["p"])) {
    $p = "";
  } else {
    $p = test_input($_POST["p"]);
  }

  if (empty($_POST["ditanya"])) {
   
  } else {
    $ditanya = test_input($_POST["ditanya"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<b>MAKA :</b>
<br>
<p><b>SILOGISME KATEGORIK</b>
<br> Logika :
<center>p -> q</center>
<center>q</center>
<center>================================</center>
<?php
echo "Kesimpulan :"; echo "<center>"; echo "p"; echo "</center>";
echo "<br>"; echo "Sehingga :";

echo "<center>"; echo $sp; echo "&nbsp"; echo $sq; echo ","; echo "&nbsp"; echo $p; echo "&nbsp"; echo $q; echo"</center>"; 
echo "<br>";
echo "<center>"; echo $sp; echo "&nbsp";echo $sq;echo "</center>";
echo "<center>"; echo "================================"; echo "</center>";
echo "<left>"; echo "Kesimpulan :"; echo "</left>";
echo "<center>"; echo "maka"; echo "&nbsp"; echo $p; echo "&nbsp"; echo $sq;
?>

</body>
</html>
