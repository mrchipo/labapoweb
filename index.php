<!DOCTYPE html>
<html lang="ru">
<head>

            <meta charset="UTF-8">
			<title>Лабораторная работа №3ntsn</title>
			<meta name="keywords" content="Лабораторная работа ">
		    <link href='styles\Styles.css' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="bg">


			<div class="block"><p id="titl">WELCOME TO THE GRAND</p>
            </div>


		<div id="sp" class="spn"><img src="img\spons.png"></div>


	</div>


<script>
    var boxElement = document.querySelector('.block');
var animation = boxElement.animate([
  {transform: 'translate(0)'},
  {transform: 'translate(0px, 200px)'}
], 1000);
animation.addEventListener('finish', function() {
  boxElement.style.transform = 'translate(0px, 200px)';
});

var boxel = document.querySelector('.spn');
var anim= boxel.animate([
  {transform: 'translate(0)'},
  {transform: 'translate(300px, -150px)'}
], 1000);
anim.addEventListener('finish', function() {
  boxel.style.transform = 'translate(300px, -150px)';
});

        setTimeout(function(){
            window.location.href = 'Lab2.php';
          }, 2 * 1000);


</script>
</body>
</html>
