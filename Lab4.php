<!DOCTYPE html>
<html lang="ru">
<head>

      <meta charset="UTF-8">
			<title>Лабораторная работа №4</title>
			<meta name="keywords" content="Лабораторная работа 2">
		  <link href='styles/Style.css' rel='stylesheet' type='text/css'>
			<script src="jquery-3.3.1.min.js"></script>
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
		<div class="menu"><p class="men"><a href="Lab2.php">HOME</a></p><p class="men"><a href="">DOWNLOAD</a></p><p class="men"><a href="index.php">PREVIEW</a></p><p class="men"><a href="">ABOUT US</a></p><p class="men"><a href="">SUPPORT</a></p><p class="men"><a href="">CASHIER</a></p><p class="men"><a href="">SECURITY</a></p><p class="men"><a href="">FAIR GAMING</a></p><p class="men"><a href="">NEWS</a></p></center></div>
		<div class="card"><center><h2><p class="gm"><a href="">Blackjack</a></p><p class="gm"><a href="">Slots</a></p><p class="gm"><a href="">Craps</a></p><p class="gm"><a href="">Video Poker</a></p></h2></center></div>
		<div class="tmenu"><p class="tm">MENU</p></div>
		<div class="tgames"><p class="tm">GAMES</p></div>
		<div class="tabl">
											<table border="1">
													<tr>
															<td><strong>$_GET</strong></td>
															<td></td>
													</tr>

													<?php
													foreach($_GET as $key => $value){

															echo "<tr><td>$key</td>";
															echo "<td>$value</td></tr>";

													}?>
													<tr>
															<td><strong>$_POST</strong></td>
															<td></td>
													</tr>
													<tr>
													<?php
													foreach($_POST as $key => $value){
															echo "<tr><td>$key</td>";
															echo "<td>$value</td></tr>";

													}?>
													</tr>
													<tr>
															<td><strong>$_SERVER</strong></td>
															<td></td>
													</tr>
													<tr>
													<?php
													foreach($_SERVER as $key => $value){
															echo "<tr><td>$key</td>";
															echo "<td>$value</td></tr>";

													}?>
													</tr>
											</table>

	</div>


	</div>
		<!--	<script type="text/javascript">
			function provGuest() {
obj_form=document.forms.Guest;
obj_pole_name =obj_form.login;
obj_pole_email =obj_form.email;
obj_pole_message =obj_form.pasw;
obj_pole_message =obj_form.confpasw;
var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

if (obj_pole_name.value==""){
alert ("Напишите свое имя!");
return;
}
txt = obj_pole_email.value;
if (txt==""){
alert ("Напишите Ваш E-mail!");
return;
}
if (!(pattern.test(txt)) ) {
alert("Введите корректный E-mail типа name@gmail.com");
return;
}

if(obj_form.pasw.value != obj_form.confpasw.value){

	alert("Пароль не совпадает");
	return;
}

if(obj_form.pasw.value =="" && obj_form.confpasw.value ==""){

	alert("Введите пароль");
	return;
}


obj_form.submit();
}
</script> -->
</body>
</html>
