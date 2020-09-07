<!DOCTYPE html>
<html>
<head>
<style>
	#myHeader {
		background-color: dodgerblue;
		color: black;
		padding: 40px;
		text-align: center;
	}
</style>	
</head>
<body>
	<center><h2 id="myHeader">SOAL MATEMATIKA INFORMATIKA IV</h2>
	<h3 style="background-color: powderblue;">
<form method="POST" action="index.php"><b>
	 sp : <input type="text" name="sp"> <br>
	 sq : <input type="text" name="sq"> <br>
	 p : <input type="text" name="p"> <br>
	 q : <input type="text" name="q"> <br><br>
	Ditanya : <br></b>
		<input type="radio" name="ditanya" value="silogismekategorik"> Silogisme Kategorik <br>
		<input type="radio" name="ditanya" value="silogismedisjungtif"> Silogisme Disjungtif <br>
		<input type="radio" name="ditanya" value="dilema"> Dilema <br>
		<input type="radio" name="ditanya" value="predikatlogis"> Predikat Logis <br><br>

	 	<input type="submit" name="Lihat" value="Lihat"> <button type="button" onclick="alert('Bye')">Keluar </button> 
</form></h3></center>

<h4 style="background-color: dodgerblue;"> 
<?php
$sp = $_POST["sp"];
$sq = $_POST["sq"];
$p = $_POST["p"];
$q = $_POST["q"];
$ditanya = $_POST["ditanya"];


if (isset($_POST['Lihat'])) {
	
	if ($ditanya=="silogismekategorik") {
echo "<b>"; echo "Silogisme Kategorik"; echo "</b>";
echo "<br>"; echo "Logika :";
echo "<center>"; echo "p"; echo "->"; echo "q"; echo "</center>";
echo "<center>"; echo "q"; echo "</center>";
echo "<center>"; echo "================================"; echo "</center>";
echo "Kesimpulan :"; echo "<center>"; echo "p"; echo "</center>";
echo "<br>"; echo "Sehingga :";

echo "<center>"; echo $sp; echo "&nbsp"; echo $sq; echo ","; echo "&nbsp"; echo $p; echo "&nbsp"; echo $q; echo"</center>"; 
echo "<br>";
echo "<center>"; echo $sp; echo "&nbsp";echo $sq;echo "</center>";
echo "<center>"; echo "================================"; echo "</center>";
echo "<left>"; echo "Kesimpulan :"; echo "</left>";
echo "<center>"; echo "maka"; echo "&nbsp"; echo $p; echo "&nbsp"; echo $sq;
	}
	elseif ($ditanya=="silogismedisjungtif") {
echo "<b>"; echo "Silogisme Disjungtif"; echo "</b>";
echo "<br>"; echo "Logika :";
echo "<center>"; echo "(p v q)^ p -> ~q"; echo "</center>";
echo "<center>"; echo "~q"; echo "</center>";
echo "<center>"; echo "================================"; echo "</center>";
echo "Kesimpulan :"; echo "<center>"; echo "~q"; echo "</center>";
echo "<br>"; echo "Sehingga :";

echo "<center>"; echo $sp; echo "&nbsp"; echo $sq; echo ","; echo "&nbsp"; echo $p; echo "&nbsp"; echo $q; echo"</center>"; 
echo "<br>";
echo "<center>"; echo "ternyata"; echo "&nbsp"; echo $p; echo "&nbsp"; echo "tidak"; echo "&nbsp"; echo $q; echo "</center>";
echo "<center>"; echo "================================"; echo "</center>";
echo "<left>"; echo "Kesimpulan :"; echo "</left>";
echo "<center>"; echo "jadi pasti"; echo "&nbsp"; echo $p; echo "&nbsp"; echo "tidak"; echo "&nbsp"; echo $q;
	}
	elseif ($ditanya=="dilema") {
echo "<b>"; echo "Dilema"; echo "</b>";
echo "<br>"; echo "Logika :";
echo "<center>"; echo "{ (p -> q)^{(r -> q) }^(p -> r)"; echo "</center>";
echo "<center>"; echo "q"; echo "</center>";
echo "<center>"; echo "================================"; echo "</center>";
echo "Kesimpulan :"; echo "<center>"; echo "p"; echo "</center>";
echo "<br>"; echo "Sehingga :";
echo "<center>"; echo "jika"; echo "&nbsp"; echo $sp; echo "&nbsp"; echo $sq; echo ","; echo "&nbsp"; echo"dan"; echo "&nbsp"; echo $p; echo "&nbsp"; echo"butuh"; echo"&nbsp"; echo $q; echo"</center>"; 
echo "<br>";
echo "<center>"; echo $sp; echo "&nbsp"; echo "atau"; echo"&nbsp"; echo $p; echo "&nbsp"; echo $sq; echo "</center>";
echo "<center>"; echo "================================"; echo "</center>";
echo "<left>"; echo "Kesimpulan :"; echo "</left>";
echo "<center>"; echo "maka"; echo "&nbsp"; echo $sp; echo "&nbsp"; echo "dan"; echo "&nbsp"; echo $p; echo "&nbsp"; echo $q;
    }
    elseif ($ditanya=="predikatlogis") {
echo "<b>"; echo "Predikat Logis"; echo "</b>";
echo "<br>"; echo "Logika :";
echo "<center>"; echo "p -> q"; echo "</center>";
echo "<center>"; echo "~q"; echo "</center>";
echo "<center>"; echo "================================"; echo "</center>";
echo "Kesimpulan :"; echo "<center>"; echo "~p"; echo "</center>";
echo "<br>"; echo "Sehingga :";
echo "<center>"; echo $sp; echo "&nbsp"; echo $sq; echo ","; echo"&nbsp"; echo $p; echo "&nbsp"; echo $q; echo"</center>"; 
echo "<br>";
echo "<center>"; echo $p; echo "&nbsp"; echo "dan"; echo "&nbsp"; echo $p; echo "&nbsp"; echo $q; echo "</center>";
echo "<center>"; echo "================================"; echo "</center>";
echo "<left>"; echo "Kesimpulan :"; echo "</left>";
echo "<center>"; echo "maka"; echo "&nbsp"; echo $sp; echo "&nbsp"; echo "dan"; echo "&nbsp"; echo $p; echo"&nbsp"; echo "itu"; echo "&nbsp"; echo $sq;
    }
} 
?>
</h4>
</body>
</html>
