<?php
include "inc.php";
if(isv("message")){
if(isv("id")){
$sql =  UpDate("message","send",1,"where id=".isv("id"));
if($sql){
  echo json_encode(array('success' =>true));
}else{
    echo json_encode(array('success' =>false));
}
}else {
  $arrayName = array('AMsg' =>Num("message"),"TMsg"=>Num("message","where send='0'"),"SMsg"=>Num("message","where send='1'"));
  echo json_encode($arrayName);
}
}else{
$S = Sel("message","where send='0'");
if($S){
 $arrayName = array('error' =>false,'id' =>$S->id,'Number' =>$S->number,"msg"=>$S->message,"date"=>$S->date,"cantry"=>$S->cantry);
 echo json_encode($arrayName);
}else{
  $arrayName = array('error' =>true,"msg"=>"no message !!");
  echo json_encode($arrayName);
}

}
 ?>
