<?php
  if (isset($_POST['idnum'])){
		$myid= $_POST['idnum'];
    $res = array();
    for ($i = 0; $i < $myid; $i++) {
        $res[]=rand(15,170);
    }
				echo json_encode($res);
  }
  ?>
  
