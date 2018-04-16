<html>

<head>
<meta charset="UTF-8">
<title>PicSport'</title>
<link rel="stylesheet" type="text/css" href="style/css.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
<header>
<center><h2><i class="fa fa-camera"></i> PicSport'</h2><br>
<p class="txtSlogan">Revivez en photos les plus grands moments de sport !</p>
<br>
</center>
</header>

<table class="tabMe">
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	
	<tr>
		<td width="100%" align="center"><p class="txtTab">Bonjour et bienvenue sur PicSport'!</p></td>

		
	</tr>
	
</table>

<br>

<!-- Tableau contenant mes deux images + texte correspondant -->

<table class="tabMe">
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>

	
	<tr>
		<td width="50%" align="center">
			<p>Ce site internet sous forme de portofolio est le résultat de ma passion : le sport<br>
				Veuillez trouvez sur ce site des photos marquantes de chaque sport, toutes époques confondues.<br>
				Selectionnez votre sport à l'aide de la liste déroulante ci-dessous.<br>

				<br>Bonne visite!</p>
		</td>
		
	</tr>
</table>
<br>
<center>

<table class="tabMe">
	<tr>
		<td  width="50%"align="center">
			<p class = "im">
	<img src="img/pageAcc/ball.png">
	<img src="img/pageAcc/basket.jpg">
	<img src="img/pageAcc/rugby.jpg">
	<img src="img/pageAcc/tennis.png">
</td>
	</tr>
		
		</table>
<br>
	<select name="selectSport" class="selectSport" onchange="location = this.options[this.selectedIndex].value;">
	 <option selected="true" disabled="disabled">Sport</option> 
	 <option value="data/football.php">Football</option>
	 <option value="data/tennis.php">Tennis</option>
	 <option value="data/rugby.php">Rugby</option>
	 <option value="data/basketball.php">BasketBall</option>
	</select>
			
</center>	



	
	


</body>
<footer><i class="fa fa-copyright"></i> KACreation</footer>
</html>