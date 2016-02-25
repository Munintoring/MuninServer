<?php

//$output = shell_exec('/usr/bin/snmpwalk -v 2c -c public 192.168.1.2 1.3.6.1.4.1.14179.2.2.1.1.3| cut -d \'"\' -f2');
//echo "<pre>$output</pre>";


$ap = $_GET["AP"];
exec("/etc/scripts/ToonClientsPerAP $ap",$output);
foreach ($output as &$value) {
   echo "$value";
}


?>
