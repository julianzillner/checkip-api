<?php
header('content-type: application/json; charset=utf-8');
$info = array("ip_adress"=>$_SERVER['REMOTE_ADDR']);
$data = json_encode($info);
if( $_GET['callback'] ){
    echo $_GET['callback'] . "('" . $data . "');";
} else {
    echo $data;
}
?>