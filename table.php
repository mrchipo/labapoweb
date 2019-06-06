<!DOCTYPE html>
<html lang="ru">
<head>

      <meta charset="UTF-8">
			<title>Лабораторная работа №3</title>
			<meta name="keywords" content="Лабораторная работа 2">
		  <link href='styles/Style3.css' rel='stylesheet' type='text/css'>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
		<div class="plc"><img src="img/plechi.png">
      </div>
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
	</div>
  <form action="#" method="POST" enctype="multipart/form-data" id="formGD" style="color:yellow;font-family: 'Arial BlackLItalic',Arial,Verdana;">
                Width: <input type="text" name="Width" value=400><br><br>
                Height: <input type="text" name="Height" value=300><br><br>
                You image: <input type="file" name="myimg"> <br><br>
                <input type="submit"  value="Преобразовать" class="ok"><br>
      </form>
            <?php

                $path = "./myimg/";

                if($_SERVER['REQUEST_METHOD'] != 'POST') return;
                if (!@copy($_FILES['myimg']['tmp_name'], $path.$_FILES['myimg']['name']))
                {
                    echo 'Что-то пошло не так <br>';
                    return;
                }
                if(!chek()) return;
                $str=generateRandomString(5);
                $src="myimg/".$_FILES["myimg"]["name"];
                cropImg( $src,"myimg/"."n_".$str.$_FILES["myimg"]["name"], $_POST["Width"], $_POST["Height"]);
                $newPath="myimg/"."n_".$str.$_FILES["myimg"]["name"];
                echo("<h3 >".$_POST["Width"]."x". $_POST["Height"]."</h3><br>");
                echo "<h3>Уменьшенное  изображение</h3><div class='GDimg' align = center><img style='max-width: 450px;'src=$newPath></img></div>";
                echo "<h3>Оригинал</h3><div class='GDimge' align=center ><img src='$src'></img></div>";

            function chek()
            {
                $types = array('image/gif', 'image/png', 'image/jpeg');
                if (!in_array($_FILES['myimg']['type'], $types))
                {
                    echo('<p>Запрещённый тип файла!</p>');
                    return false;
                }
                return true;
            }
            function generateRandomString($length = 10) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }

            function cropImg($aInitialImageFilePath, $aNewImageFilePath, $aNewImageWidth, $aNewImageHeight) {
                if (($aNewImageWidth < 0) || ($aNewImageHeight < 0)) {
                    return false;
                }

                $lAllowedExtensions = array(1 => "gif", 2 => "jpeg", 3 => "png");

                list($lInitialImageWidth, $lInitialImageHeight, $lImageExtensionId) = getimagesize($aInitialImageFilePath);

                if (!array_key_exists($lImageExtensionId, $lAllowedExtensions)) {
                    return false;
                }
                $lImageExtension = $lAllowedExtensions[$lImageExtensionId];

                $func = 'imagecreatefrom' . $lImageExtension;
                $lInitialImageDescriptor = $func($aInitialImageFilePath);

                $lCroppedImageWidth = 0;
                $lCroppedImageHeight = 0;
                $lInitialImageCroppingX = 0;
                $lInitialImageCroppingY = 0;
                if ($aNewImageWidth / $aNewImageHeight > $lInitialImageWidth / $lInitialImageHeight) {
                    $lCroppedImageWidth = floor($lInitialImageWidth);
                    $lCroppedImageHeight = floor($lInitialImageWidth * $aNewImageHeight / $aNewImageWidth);
                    $lInitialImageCroppingY = floor(($lInitialImageHeight - $lCroppedImageHeight) / 2);
                } else {
                    $lCroppedImageWidth = floor($lInitialImageHeight * $aNewImageWidth / $aNewImageHeight);
                    $lCroppedImageHeight = floor($lInitialImageHeight);
                    $lInitialImageCroppingX = floor(($lInitialImageWidth - $lCroppedImageWidth) / 2);
                }

                $lNewImageDescriptor = imagecreatetruecolor($aNewImageWidth, $aNewImageHeight);
                imagecopyresampled($lNewImageDescriptor, $lInitialImageDescriptor, 0, 0, $lInitialImageCroppingX, $lInitialImageCroppingY, $aNewImageWidth, $aNewImageHeight, $lCroppedImageWidth, $lCroppedImageHeight);
                $textcolor = imagecolorallocate($lNewImageDescriptor, 255, 255, 255);
                imagestring($lNewImageDescriptor, 5, 0, 0, 'Skorobogatko S.V.', $textcolor);
                $func = 'image' . $lImageExtension;

                return $func($lNewImageDescriptor, $aNewImageFilePath,100);
            }

            ?>
</body>
</html>
