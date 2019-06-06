<?php 
if (isset($_GET["id"]))
{
  $myid= $_GET["id"];
  $path_to_xml='D:/xampp/htdocs/labapoweb/xml/phones.xml';
  $arr = serList($path_to_xml,$myid);
  echo json_encode($arr);
}

function serList($path_to_xml,$myid)
{
  $arr = array();
  if(file_exists($path_to_xml))
  {
    $dom = new DOMDocument('1.0', 'utf-8');
    $dom->load($path_to_xml);
    $iter = 0;
    if($path_to_xml != false)
    {
      $phones = $dom->getElementsByTagName('phone' );
      foreach($phones as $phone) 
      {     
        $id=$phone->getAttribute( "id" );
        if ($id == $myid)
        {                    
          //$iter++;
          $i=0;
          $paramList = $phone->getElementsByTagName( "param" );  
          foreach( $paramList as $param )
          {
            $parNames=$param->getElementsByTagName( "parName" );
            $parName=$parNames->item(0)->nodeValue;
            $parValues=$param->getElementsByTagName( "parValue" );
            $parValue=$parValues->item(0)->nodeValue;
            $arr[$id]["paramList"][$i]['parNames'] = $parName;
            $arr[$id]["paramList"][$i++]['parmValues'] = $parValue;
          }
          return $arr;
        }
      }
    }
    else
    {
      echo "XML Error";
    }
  }
  else
  {
    echo "xml FILE NOT FIND .";
  }
}
?>