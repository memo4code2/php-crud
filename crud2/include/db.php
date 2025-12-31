<?php
$host='localhost';
$User='root';
$Pass='';
$db='newdev';

 $conn= mysqli_connect($host,$User,$Pass,$db);
if(! $conn){
    echo die("Cant Connect");
}else{
    echo "Connectd";
}















?>