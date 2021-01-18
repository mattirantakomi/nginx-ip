<?php

$interface = $_SERVER['INTERFACE'];

echo shell_exec("ifconfig $interface | grep 'inet ' | awk '{ print \$2 }'");

?>
