<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <title>Лабораторная работа №2</title>
    <meta name="keywords" content="Лабораторная работа 2">
    <link href='styles/Style.css' rel='stylesheet' type='text/css'>
    <script src="jquery-3.3.1.min.js"></script>
    
</head>

<body>
    <div class="bg">

        <div class="cas"><img src="img/casino.png" alt=""></div>
        <div class="fs"><img src="img/fishki.png" alt=""></div>
        <div class="cr"><img src="img/carti.png"></div>
        <div class="grn">
            <img src="img/green.png">
        </div>
        <div>
            <p class="titl">WELCOME TO THE GRAND</p>
        </div>
        <div class="plc"><img src="img/plechi.png"> </div>
        <div class="rul"><img src="img/ruletka.png"></div>
        <div class="sp"><img src="img/spons.png"></div>
        <div class="cr2"><img src="img/crn.png"></div>
        <div class="cr1"><img src="img/crn.png"></div>
        <div class="pc"><img src="img/pich.png"></div>
        <div class="dl"><img src="img/dol.png"></div>
        <div class="tr1"><img src="img/tri.png"></div>
        <div class="tr2"><img src="img/tri.png"></div>
        <div class="menu">
            <p class="men"><a href="Lab3.php">HOME</a></p>
            <p class="men"><a href="Lab4.php">DOWNLOAD</a></p>
            <p class="men"><a href="index.php">PREVIEW</a></p>
            <p class="men"><a href="Lab5.php">ABOUT US</a></p>
            <p class="men"><a href="Lab6.php">SUPPORT</a></p>
            <p class="men"><a href="">CASHIER</a></p>
            <p class="men"><a href="">SECURITY</a></p>
            <p class="men"><a href="">FAIR GAMING</a></p>
            <p class="men"><a href="">NEWS</a></p>
            </center>
        </div>
        <div class="card">
            <center>
                <h2>
                    <p class="gm"><a href="">Blackjack</a></p>
                    <p class="gm"><a href="">Slots</a></p>
                    <p class="gm"><a href="">Craps</a></p>
                    <p class="gm"><a href="">Video Poker</a></p>
                    <p class="gm"><a href="">Roulette</a></p>
                    <p class="gm">
                </h2>
            </center>
        </div>
        <div class="tmenu">
            <p class="tm">MENU</p>
        </div>
        <div class="tgames">
            <p class="tm">GAMES</p>
        </div>
        
        <div id="can">
		<input type="number" name="quantity" min="1" max="7" id="num" value="5" >
    <input type="button" value="submit" name="submit" onclick="ajax()">
    <br>
    <canvas id="myCanvas" width="400" height="200" style="border:1px solid #c3c3c3; background-color: white;" >
		</div>
<script>
function ajax(){
    var arr;
    var canvas = document.getElementById('myCanvas');
    var dat = {idnum:document.getElementById("num").value};
    if(dat>7)
    {
        dat = 7;
    }
    $.ajax({
        type:"POST",
        url:"server.php",
        dataType:"text",
        data: dat,
        success:function(res){
            arr = JSON.parse(res);
            draw(arr,canvas);
        }
    });
}
                    
function draw(arr,canvas){
    reset();
    var colorArray =['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', 
                    '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                    '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', 
                    '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                    '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC', 
                    '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                    '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680', 
                    '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                    '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', 
                    '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF'];
    var ctx = canvas.getContext('2d');
    var width = 40; 
    var X = 15; 
    var base = 200;
    /*for (var x = 0.5; x < 400; x += 20) {
        ctx.moveTo(x, 0);
        ctx.lineTo(x, 400);
        }*/

    for (var y = 0.5; y < 400; y += 20) {
        ctx.moveTo(0, y);
        ctx.lineTo(400, y);
    }

    ctx.strokeStyle = "#eeeeee";
    ctx.stroke();

    for (var i =0; i<arr.length; i++) {
        ctx.fillStyle = colorArray[i+5]; 
        var h = arr[i];
        ctx.fillRect(X,canvas.height - h,width,h);
        
        X +=  width+15;
        
        ctx.fillStyle = 'black';
        ctx.fillText(arr[i],X-44,canvas.height - h -5);
    }
}
function reset(){
    var canvas = document.getElementById('myCanvas');
    var ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}

    
</script>
    </div>
</body>


</html>
