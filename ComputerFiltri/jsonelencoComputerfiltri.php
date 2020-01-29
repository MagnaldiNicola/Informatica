<?php
require("./connection.php");

if(isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
}else{
    $id="";
}

if(isset($_REQUEST["marcaMonitor"])){
    $marcaMonitor = $_REQUEST["MarcaMonitor"];
}else{
    $marcaMonitor="";
}

if(isset($_REQUEST["marcaTastiera"])){
    $marcaTastiera = $_REQUEST["marcaTastiera"];
}else{
    $marcaTastiera="";
}

if(isset($_REQUEST["marcaComputer"])){
    $marcaComputer = $_REQUEST["marcaComputrer"];
}else{
    $marcaComputer="";
}
//filtri fine
//applicare filtri su $sql



$sql = "select * from computer";

//jsonelencoComputerfiltri.php?id=2
if($id != ""){
    $sql .=" where id= $id"; 
}
if($marcaVideo != ""){
    $sql .=" where marcaVideo= $marcaVideo"; 
}
if($marcaTastiera != ""){
    $sql .=" where marcaTastiera= $marcaTastiera"; 
}
if($marcaCase != ""){
    $sql .=" where marcaCase = $marcaCase"; 
}

$rs = $con->query($sql);
if($rs == false){
    die("sql error". $con->error . "<br/>" . $sql);
}
$vet = array();
//-> fetch_assoc() : $record["id"], $record["marcaVideo"], $record["marcaTastiera"], $record["marcaCase"]
while($record = $rs->fetch_assoc()){
    array_push($vet, $record);

}
$json = json_encode($vet);
echo $json;


?>