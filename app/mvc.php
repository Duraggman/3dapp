<?php
// Includes
require 'view/load.php';
require 'mod/mod.php';
require 'cont/cont.php';
$pageURI = $_SERVER['REQUEST_URI'];
$pageURI = substr($pageURI, strrpos($pageURI,'index.php')+10);
    if (!$pageURI)
        new Controller('home');
    else
        new Controller($pageURI);

?>