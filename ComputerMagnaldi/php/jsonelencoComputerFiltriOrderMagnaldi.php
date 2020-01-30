<?php
require("./connection.php");

$API_ID = "ciaomondo";
$accesso = false;


if(isset($_REQUEST["token"])){
    $token = $_REQUEST["token"];
}else{
    $token="";
}

if($token == $API_ID){
    $accesso = true;
}

if($accesso){

    if(isset($_REQUEST["id"])){
        $id = $_REQUEST["id"];
    }else{
        $id="";
    }

    if(isset($_REQUEST["marcavideo"])){
        $marcavideo = $_REQUEST["marcavideo"];
    }else{
        $marcavideo="";
    }

    if(isset($_REQUEST["marcatastiera"])){
        $marcatastiera = $_REQUEST["marcatastiera"];
    }else{
        $marcatastiera="";
    }

    if(isset($_REQUEST["marcacase"])){
        $marcacase = $_REQUEST["marcacase"];
    }else{
        $marcacase="";
    }


    if(isset($_REQUEST["order"])){
        $order = $_REQUEST["order"];
    }else{
        $order = false;
    }

    //filtri fine
    //applicare filtri su $sql


    $sql = "select * from computer";

    //jsonelencocomputerfiltri.php?id=2
    if($id != ""){
        $sql .=" where id= $id"; 
    }
    if($marcavideo != ""){
        $sql .=" where marcavideo=$marcavideo"; 
    }
    if($marcatastiera != ""){
        $sql .=" where marcatastiera=$marcatastiera"; 
    }
    if($marcatastiera != ""){
        $sql .=" where marcacase=$marcacase"; 
    }

    if($order){
        $sql.= "  ORDER BY $order";
    }

    $rs = $con->query($sql);
    if($rs == false){
        die("sql error". $con->error . "<br/>" . $sql);
    }
    $vet = array();
    //-> fetch_assoc() : $record["id"], $record["marcavideo"], $record["marcatastiera"]
    while($record = $rs->fetch_assoc()){
        array_push($vet, $record);

    }
    $json = json_encode($vet);
    echo $json;
}else die("403- fornidden");

?>