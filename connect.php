<?php
$konek=new mysqli('localhost','root','','spk42');
if ($konek->connect_errno){
    "Database Error".$konek->connect_error;
}
?>