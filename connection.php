<?php

    $dbhost="localhost";
    $dbuser="";
    $dbpass="";
    $db="info";

    $conn=new mysqli($dbhost,$dbuser,$dbpass,$db) or die("connection unsuccessful".$conn->error);
    ?>
