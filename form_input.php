<!DOCTYPE html>
<html>
<head>
<style>
	#myHeader {
		background-color: lightblue;
		color: black;
		padding: 40px;
		text-align: center;
	}
</style>	
</head>
<body>
	<h1 id="myHeader">SOAL MATEMATIKA INFORMATIKA IV</h1>
	<h1><center>
	<form>
	<pre>
	 Sp	 :<input type="text" name="sp"> 
	Sq 	:<input type="text" name="sq">
	p	:<input type="text" name="p">
	q 	:<input type="text" name="q">

  Ditanya:
  <input type="radio" name="ditanya" <?php if (isset($ditanya) && $ditanyak=="Silogisme Kategorik") echo "checked";?> value="Silogisme Kategorik">Silogisme Kategorik <form method="post" action="silogismekategorik.php">
  <input type="radio" name="ditanya" <?php if (isset($ditanya) && $ditanyad=="Silogisme Disjungtif") echo "checked";?> value="Silogisme Disjungtif">Silogisme Disjungtif <form method="post" action="silogismedisjungtif.php">
  <input type="radio" name="ditanya" <?php if (isset($ditanya) && $ditanyadi=="Dilema") echo "checked";?> value="Dilema">Dilema <form method="post" action="dilema.php"> 	
  <input type="radio" name="ditanya" <?php if (isset($ditanya) && $ditanyapre=="Predikat Logis") echo "checked";?> value="Predikat Logis">Predikat Logis <form method="post" action="silogismekategorik.php">
  <br><br>

	   	 <input type="submit" name="Lihat" value="Lihat"> 	<button type="button" onclick="alert('Bye')">Keluar</button>
					
		 </pre>
	</form>					
	</center></h1>
</style>

</body>
</html>
