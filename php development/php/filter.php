<?php
$email = "mdshamimsorkar19@gmail";
$ip="192.168.0.1";
if(filter_var($ip,FILTER_VALIDATE_IP))
echo "Yes;
else 
echo "No";
?>