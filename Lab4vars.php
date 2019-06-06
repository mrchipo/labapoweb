<!DOCTYPE html>
<html lang="ru">
<head>
		
            <meta charset="UTF-8">
			<title>Лабораторная работа №3</title>
			<meta name="keywords" content="Лабораторная работа 2">
		    <link href='styles/Style3.css' rel='stylesheet' type='text/css'>
            <script src="jquery-3.3.1.min.js"></script>	
</head>
<body>
	<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $login = $_POST['login'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];
				$email = $_POST['email'];
				
				$polya ="validation";
				$err1 = false;
				$err2 = false;
				$err3 = false;
		if($password != $repassword || strlen($password)< 1 ||strlen($repassword)< 1  ){
			$err1 = true; 
			}
		
		if(!preg_match("/[0-9a-z_\.\-]+@[0-9a-z_\.\-]+\.[a-z]{2,4}/i", $email))
	{
				
		$err2 = true; 		
		}
		
		if(strlen($login) == 0 || strlen($password) == 0 || strlen($repassword) == 0 || strlen($email) == 0){
				
				
		$err3 = true; 
		}
	}
	else{
		$polya = "Zapolnite polya";
		$err1 = false;
		$err2 = false;
		$err3 = false;
	}
	
	
	?>
	
   

		
		<div id="content">
                    <div id="server_vars">
                        <table>
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
                            <tr>t
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

