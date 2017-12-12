<?php
include "inc.php";
if(isv("set")){
$convert_to_array = explode(',',isv("set"));
$convert_to_array2 = explode(',',isv("val"));
for($i=0; $i < count($convert_to_array ); $i++){
    $key_value = explode(',', $convert_to_array [$i]);
    $key_value2 = explode(',', $convert_to_array2[$i]);
    $end_array[$key_value [0]] = $key_value2 [0];
}
if(isv("where")){
$Sql =  UpDate(isv("table"),$end_array,null,isv("where"));
}else{
$Sql =  SqlIn(isv("table"),$end_array);
}
if($Sql){
  echo json_encode(array('success' =>true));
}else{
    echo json_encode(array('success' =>false));
}
}else if(isv("message")){
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
 $arrayName = array('error' =>false,'id' =>$S->id,'number' =>$S->number,"message"=>$S->message,"date"=>$S->date,"cantry"=>$S->cantry);
 echo json_encode($arrayName);
}else{
  $arrayName = array('error' =>true,"msg"=>"no message !!");
  echo json_encode($arrayName);
}

}
 ?>
