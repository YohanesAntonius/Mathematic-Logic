<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$sp = $sq = $ditanya = $p = $q = "";

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

<h2>SOAL MATEMATIKA INFORMATIKA IV</h2>
<p><span class="error">* Input logika</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Sp: <input type="text" name="sp" value="<?php echo $sp;?>">
 
  <br><br>
  Sq: <input type="text" name="sq" value="<?php echo $sq;?>">
  
  <br><br>
  P: <input type="text" name="p" value="<?php echo $p;?>">
 
  <br><br>
  Q: <input type="text" name="q" value="<?php echo $q;?>">
  <br><br>
  Ditanya:
  <input type="radio" name="ditanya" <?php if (isset($ditanya) && $ditanya=="Silogisme Kategorik") echo "checked";?> value="Silogisme Kategorik">Silogisme Kategorik
  <input type="radio" name="ditanya" <?php if (isset($ditanya) && $ditanya=="Silogisme Disjungtif") echo "checked";?> value="Silogisme Disjungtif">Silogisme Disjungtif
  <input type="radio" name="ditanya" <?php if (isset($ditanya) && $ditanya=="Dilema") echo "checked";?> value="Dilema">Dilema  
  <input type="radio" name="ditanya" <?php if (isset($ditanya) && $ditanya=="Predikat Logis") echo "checked";?> value="Predikat Logis">Predikat Logis 
  <br><br>
  <input type="submit" name="submit" value="Submit">  <button type="button" onclick="alert('Bye')">Keluar</button>
</form>

<b>MAKA :</b>
<br>
<p><b>SILOGISME KATEGORIK</b>
<br> Logika :
<center>p -> q</center>
<center>q</center>
<center>================================</center>
<?php
echo "<h2>Hasil :</h2>";
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
