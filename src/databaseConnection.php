<?php
//$servername = "localhost";
//$username = "manageStore";
//$password = "1234";
//$database = "database_store";

//$servername = "aws.connect.psdb.cloud";
//$username = "wxqbp3dv5akye62sh3o3";
//$password = "pscale_pw_NtRPyROEPD4d2bVflUvGo7AOXZwPE5XJlfb5PBHvr0m";
//$database = "captainsportsinventory";
//
//// Create connection
//$con = mysqli_connect($servername, $username, $password, $database);
//
//// Check connection
//if (!$con) {
//    die("Connection failed: " . mysqli_connect_error($con));
//}


$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, "ca-bundle.crt", NULL, NULL);
$mysqli->real_connect('aws.connect.psdb.cloud', 'h6bsu1h2335fxaq87uv7', 'pscale_pw_QcWIke1VfCJFa8bWNPAFR1hxjxnm7sJikEYsHOwFp84', 'captainsportsinventory');

//    if (!$mysqli) {
//        die("Connection failed: " . mysqli_connect_error($mysqli));
//    }
//    else
//    {
//        echo "Connection successful";
//    }



//$mysqli->close();
