<?php
$command = "mysql -h localhost -u root";
//$command = "dir /s /b /o:gn";
$output = shell_exec($command);
$retval = "";
$last_line = system($command, $retval);
var_dump($retval);