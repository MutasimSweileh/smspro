<?php
include "inc.php";
if(isv("message")){
$arrayName = array('AMsg' =>Num("message"),"TMsg"=>Num("message","where send='0'"),"SMsg"=>Num("message","where send='1'"));
echo json_encode($arrayName);
}else{
 $arrayName = array('Number' =>1119195568,"msg"=>"test Msg to send","date"=>time(),"cantry"=>"Egypt");
 echo json_encode($arrayName);
}
 ?>
