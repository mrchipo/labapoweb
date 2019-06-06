
<?php

$current_directory = "./";
$curr_dir_key = "current_directory_key";
$current_path = "current_path";

$result_correct = 0;
$result_file_esixt = 1;
$result_error = 2;
?>
<!DOCTYPE html>
<html lang="ru">
<head>

            <meta charset="UTF-8">
			<title>Лабораторная работа №4</title>
			<meta name="keywords" content="Лабораторная работа 2">
		    <link href='styles/Style.css' rel='stylesheet' type='text/css'>
            <script src="jquery-3.3.1.min.js"></script>
            <script>
            function btnLoadClick(){
                var fileLoadInput = document.querySelector('input[type=file]');
                fileLoadInput.click();
            }
            
            function btnResOkClick(){
                var resultBlock = document.getElementById("pop_up_msg");
                resultBlock.style.display =     "none";
            }
        </script>
</head>
<body>
	
<?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            if(!empty($_FILES) && !empty($_POST[$current_path])){
                                $current_directory = $_POST[$current_path]; 
                                $result = upload_selected_file($current_directory);
                            echo "<script>
                            alert('$result>');
                            </script>" 
                             ;
                            }
                    
                            else if(!empty($_POST[$curr_dir_key]) && !empty($_POST["current_path_js"])){
                                $previous_path = $_POST["current_path_js"];
                                $current_dir = $_POST[$curr_dir_key];
                                if($current_dir == ".."){
                                    $current_directory = dirname($previous_path)."/";
                                }else{
                                    $current_directory = $previous_path.$current_dir."/";
                                }
                            }
                        }
                        echo '<input type="text" id="current_path" name="current_path" value="'.$current_directory.'" style="display: none;"/>';
?>

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
        <table>
            <thead>
                            <tr>
                                <th><?php echo $current_directory ?></th>
                                <th>Изменение</th>
                                <th>Размер</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="row_file_download">
                                <td colspan="3">
                                    <form method="post" action="Lab5.php" enctype="multipart/form-data">
                                        <?php
                                             echo '<input type="text" name="'.$current_path.'" value="'.htmlspecialchars($current_directory).'" style="display: none;"/>';
                                        ?>
                                        <input type="file" name="file_load_input" onchange="this.form.submit()">
                                        <input type="button" id="btn_path"  onclick="btnLoadClick()" value="Загрузить файл">
                                    </form>
                                </td>
                            </tr>
                            
                            <?php 
                            /* Кнопка назад если это не корень */
                                    if($current_directory != "./"){
                                        $img_src = "img/folder24.png";
                                        echo '
                                            <tr>
                                                <td colspan="3">
                                                    <div class="filesAndDirs">
                                                        <a href="#">
                                                              <img src="'.$img_src.'" id="file_image"/>
                                                              <span class="table_text">..</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                            
                                        ';
                                    }
                                    
                            ?>
                            
                            <?php
                                /*Вывод файлов и каталогов*/

                                $files = scandir($current_directory);

                                $dirs_names = null;
                                $files_names = null;

                               foreach($files as $entry){
                                    if($entry != '..' && $entry != '.'){
                                        if(is_dir($current_directory."/".$entry)){
                                            $dirs_names[] = $entry;
                                        }else{
                                            $files_names[] = $entry;
                                        }
                                    }
                                }

                                if($dirs_names != null){
                                    foreach($dirs_names as $dir_name){
                                         write_entry($current_directory."/".$dir_name, $dir_name, false);
                                    } 
                                }

                                if($files_names != null){
                                    foreach($files_names as $file_name){
                                        write_entry($current_directory."/".$file_name, $file_name, true);
                                    }  
                                }

                            ?>

                        </tbody>
            </table>
                    
	</div>


	</div>
     <script>
            var filesAndDirs = document.getElementsByClassName('filesAndDirs');
            //Проверка на наличие фалов в выбранной директории 
            for(var i = 0; i < filesAndDirs.length;i++){
                var baseName = filesAndDirs[i].getElementsByTagName("span")[0].textContent;
                
                if(baseName.indexOf('.') == -1 || baseName.indexOf('..') > -1){
                    filesAndDirs[i].onclick = function(){
                        getIntoDirPostQuery.call(this);
                    }
                }
            }
            //Переход в другие каталоги
            function getIntoDirPostQuery(){
                var baseName = this.getElementsByTagName("span")[0].textContent;
                var currPath = document.getElementById("current_path").value;
                
                
               var form = document.body.innerHTML = 
                    '<form acion="file_manager.php" name="open_dir_form" method="post" style="display:none;">'+
                    '<input type="text" name="current_directory_key" value="'+baseName+'"/>'+
                    '<input type="text" name="current_path_js" value="'+currPath+'"/>'+

                    '</form>';
                
                document.forms['open_dir_form'].submit();
            
            }
        </script>
		
</body>
</html>


 <?php function write_entry($path, $entry_name, $is_file){
//Функция для вывода папок и файлов
    if($is_file){
        $img_src = "img/file24.png";
        $size = filesize($path);
        $size_optimized = optimize_size_name($size);
    }else{
        $img_src = "img/folder24.png";
        $size = folderSize($path);
        $size_optimized = optimize_size_name($size);
    }

    $creation_time = getCreationTime($path);

    echo '<tr>
            <td><div class="filesAndDirs">
                          <img src="'.$img_src.'" id="file_image"/>
                          <span class="table_text">'.$entry_name.'</span>
            </div></td>
            <td>'.$creation_time.'</td>
            <td><span class="table_text">'.$size_optimized.'</span></td>
          </tr>';
}

//Время и время последнего изенение
function getCreationTime($path){
    $time = filemtime($path);
    $time = date("d.m.y", $time);
    
    return $time;
}

//Расчет размеров
function optimize_size_name($size){
    if($size < 1024){
        return $size.' б';
    }
    elseif($size >=1024 && $size <= 1024*1024){
        return round($size/1024,2).' Кб';
    }
    elseif($size >=1024*1024 && $size <= 1024*1024*1024){
        return round($size/1024/1024,2).' Мб';
    }
    else{
        return round($size/1024/1024/1024,2).' Гб';
    }
}
//Размер каталогов
function folderSize($path){
    $size = 0;
    
    if( !is_readable($path) || count(scandir($path)) == 2){
        return 0;
    }
    
    foreach(glob(rtrim($path, '/').'/*') as $entry){
        $size += is_file($entry)?filesize($entry):folderSize($entry);
    }

    return $size;
}
// Открытие папки
function open_nested_dir($dir_name){
    $url = "Lab5.php";
    $data = array($curr_dir_key => $current_directory."/".$dir_name);
    
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
}

//Загрузка файла
function upload_selected_file($path){
    $upload_file = $path.basename($_FILES['file_load_input']['name']);
    
    if(file_exists($upload_file)){
        return "Файл уже существует.";
    }
    else if(move_uploaded_file($_FILES['file_load_input']['tmp_name'], $upload_file)){
        return "Файл успешно загружен!";
    }else{
        return "Ошибка загрузки файл";
    }
}
 ?>