<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <title>Лабораторная работа №2</title>
    <meta name="keywords" content="Лабораторная работа 2">
    <link href='styles/Style3.css' rel='stylesheet' type='text/css'>
    <script src="jquery-3.3.1.min.js"></script>

    <!-- bin/jquery.slider.min.css -->
	<link rel="stylesheet" href="css/jslider.css" type="text/css">
	<link rel="stylesheet" href="css/jslider.plastic.css" type="text/css">
  <!-- end -->

	<script type="text/javascript" src="../js/jquery-1.7.1.js"></script>

	<!-- bin/jquery.slider.min.js -->
	<script type="text/javascript" src="js/jshashtable-2.1_src.js"></script>
	<script type="text/javascript" src="js/jquery.numberformatter-1.2.3.js"></script>
	<script type="text/javascript" src="js/tmpl.js"></script>
	<script type="text/javascript" src="js/jquery.dependClass-0.1.js"></script>
	<script type="text/javascript" src="js/draggable-0.1.js"></script>
	<script type="text/javascript" src="js/jquery.slider.js"></script>

	<style type="text/css" media="screen">
	 .layout { padding: 50px; font-family: Georgia, serif; }
	 .layout-slider { margin-bottom: 60px; width: 50%; }
	 .layout-slider-settings { font-size: 12px; padding-bottom: 10px; }
	 .layout-slider-settings pre { font-family: Courier; }
	</style>
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
        <div class="layout">

          <div class="layout-slider" style="width: 100%">
            <span style="display: inline-block; width: 400px; padding: 0 5px;"><input id="Slider1" type="slider" name="price" value="30000.5;60000" /></span> 
          </div>
          <script type="text/javascript" charset="utf-8">
            jQuery("#Slider1").slider({ from: 1000, to: 100000, step: 500, smooth: true, round: 0, dimension: "&nbsp;$", skin: "plastic" });
          </script>


  </div>
</div>

</body>


</html>
