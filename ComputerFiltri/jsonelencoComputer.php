<?php
require("./connection.php");


$sql = "select * from computer";

$rs = $con->query($sql);
if($rs == false){
    die("sql error". $con->error . "<br/>" . $sql);
}
$vet = array();
//-> fetch_assoc() : $record["id"], $record["cognome"], $record["nome"]
while($record = $rs->fetch_assoc()){
    array_push($vet, $record);

}
$json = json_encode($vet);
echo $json;


?>