<?php 
    define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'production');
    // this file location is /custom/customScript.php
    require_once("../application/config/database.php"); 
    $dbuser= $db['default']['username']; 
    $dbpassword= $db['default']['password']; 
    $dbname= $db['default']['database']; 
    $dbhost= $db['default']['hostname']; 
    
    $con = mysqli_connect($dbhost, $dbuser, $dbpassword , $dbname ); 
    if(!$con) {
        echo "<h1>Not connected "; 
        die(); 
    }
    
    
    if(isset($_POST['sid'])) {
         $id = $_POST['sid']; 
        //  $q = $con->query()
    }
?>
