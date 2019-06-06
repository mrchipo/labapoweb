<!DOCTYPE html>
<html lang="ru">
<head>

      <meta charset="UTF-8">
			<title>Лабораторная работа №3</title>
			<meta name="keywords" content="Лабораторная работа 2">
		  <link href='styles/Style3.css' rel='stylesheet' type='text/css'>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="validation.js"></script>
</head>
<body>
    <div class="bg">
		<div class="cas"><img src="img/casino.png" alt=""></div>
		<div class="fs"><img src="img/fishki.png" alt=""></div>
		<div class="cr"><img src="img/carti.png" ></div>
		<div class="grn">
			<img src="img/green.png">
			</div>
			<div><p class="titl">WELCOME TO THE GRAND</p></div>
		<div class="plc"><img src="img/plechi.png"> </div>
		<div class="rul"><img src="img/ruletka.png" ></div>
		<div class="sp"><img src="img/spons.png"></div>
		<div class="cr2"><img src="img/crn.png"></div>
		<div class="cr1"><img src="img/crn.png"></div>
		<div class="pc"><img src="img/pich.png"></div>
		<div class="dl"><img src="img/dol.png"></div>
		<div class="tr1"><img src="img/tri.png"></div>
		<div class="tr2"><img src="img/tri.png"></div>
		<div class="menu"><p class="men"><a href="Lab2.php">HOME</a></p><p class="men"><a href="Lab4.php">DOWNLOAD</a></p><p class="men"><a href="index.php">PREVIEW</a></p><p class="men"><a href="">ABOUT US</a></p><p class="men"><a href="">SUPPORT</a></p><p class="men"><a href="">CASHIER</a></p><p class="men"><a href="">SECURITY</a></p><p class="men"><a href="">FAIR GAMING</a></p><p class="men"><a href="">NEWS</a></p></center></div>
		<div class="card"><center><h2><p class="gm"><a href="">Blackjack</a></p><p class="gm"><a href="">Slots</a></p><p class="gm"><a href="">Craps</a></p><p class="gm"><a href="">Video Poker</a></p></h2></center></div>
		<div class="tmenu"><p class="tm">MENU</p></div>
		<div class="tgames"><p class="tm">GAMES</p></div>
    <div id="can">
		<input type="text" name="number" id="num"><br>
    <input type="button" value="submit" name="submit" onclick="draw()">
    <input type="button" value="Clear" name="Clear" onclick="reset()"><br><br>
    <canvas id="myCanvas" width="400" height="200" style="border:1px solid #c3c3c3; background-color: white;" >
		</div>
	</div>
</body>
</html>
