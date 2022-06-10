<?php

$con = new mysqli('localhost', 'root', 'root', 'crud_db');

if(!$con){
    die(mysqli_error($con));
}

?>