<?php
$path_to_xml = 'D:/xampp/htdocs/labapoweb/xml/phones.xml';
 ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №4</title>
    <meta name="keywords" content="Work with XML">
    <link href='styles/style66.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
    <script>
        function myFunction(id) {
            ajax_zap(id);
            var popup = document.getElementById(id);
            popup.classList.toggle("show");
        }

        function ajax_zap(id) {
            var arr;
           $.ajax({
               type:"GET",
               url:'styles/ajax/server.php?id=' + id,
               dataType:"text",
               success:function(res)
            {

                    arr = $.parseJSON(res);
                    var div = document.getElementById(id);
                    for (var i = 0; i <= arr[id]['paramList'].length;) {
                        var pp = document.createElement('P');
                        pp.innerHTML = arr[id]['paramList'][i]['parNames'] + ":  " + arr[id]['paramList'][i]['parmValues'];
                        div.insertBefore(pp, null);
                        i++;
                    }



            }
        });
        }


        function del(id) {
            document.getElementById(id).innerHTML = "";
        }

    </script>

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
            <p class="men"><a href="Lab2.php">HOME</a></p>
            <p class="men"><a href="">DOWNLOAD</a></p>
            <p class="men"><a href="index.php">PREVIEW</a></p>
            <p class="men"><a href="">ABOUT US</a></p>
            <p class="men"><a href="">SUPPORT</a></p>
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
                </h2>
            </center>
        </div>
        <div class="tmenu">
            <p class="tm">MENU</p>
        </div>
        <div class="tgames">
            <p class="tm">GAMES</p>
        </div>
        <div id="list">
            <?php
      if(file_exists($path_to_xml)){
          $dom = new DOMDocument('1.0', 'utf-8');
          $dom->load($path_to_xml);
          $id = 0;
          $phones = $dom->getElementsByTagName('phone' );
          if($path_to_xml !== false){
                  foreach ($phones as $phone) {

                          $names = $phone->getElementsByTagName('name');
                          $name = $names->item(0)->nodeValue;
                          $models = $phone->getElementsByTagName('model');
                          $model = $models->item(0)->nodeValue;
                          $diagonals =$phone->getElementsByTagName('diagonal');
                          $diagonal = $diagonals->item(0)->nodeValue;
                          $prices = $phone->getElementsByTagName('price');
                          $price = $prices->item(0)->nodeValue;
                          $serial_numbers = $phone->getElementsByTagName('serial_number');
                          $serial_number = $serial_numbers->item(0)->nodeValue;
                          $prod_years = $phone->getElementsByTagName('prod_year');
                          $prod_year = $prod_years->item(0)->nodeValue;
                          $images = $phone->getElementsByTagName('image');
                          $image = $images->item(0)->nodeValue;
                          print_moto_motod($name, $model, $price, $image,$diagonal, $prod_year, $serial_number,$id);
                          $id++;
                  }
          }else{
              echo "XML Error";
          }
      }else{
          echo "xml FILE NOT FIND .";
      }
  ?>

        </div>


</body>

</html>

<?php
function print_moto_motod($name, $model, $price, $thumbnail,$diagonal, $year, $serial_number,$id){
    echo '
        <div >
            <div>
                <img  alt="phone image"  width="200" src="'.$thumbnail.'"/>
                <div >
                    <span>'.$price.'$</span>
                </div>
            </div>
            <div >
                <span>'.$name.'</span>
                <span>'.$model.'</span>
                <table id="params">
                    <tr>
                        <td>Diagonal:</td>
                        <td>'.$diagonal.'</td>
                    </tr>
                    <tr>
                        <td>Year:</td>
                        <td>'.$year.'</td>
                    </tr>
					 <tr>
                        <td>Serial number:</td>
                        <td>'.$serial_number.'</td>
                    </tr>
                    <tr>
                    <td>
                    <div class="popup" onclick="myFunction('.$id.');del('.$id.')">Подробнее...
                    <div class="popuptext" id="'.$id.'" ></div>
                    </div>
                    </td>
                    </tr>
                </table>
            </div>
        </div>
    ';
}
?>
