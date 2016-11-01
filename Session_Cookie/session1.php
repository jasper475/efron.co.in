<?php

session_start();

$_SESSION['LoginID']=112345678963654;

echo "Session Started".$_SESSION['LoginID'];

?>