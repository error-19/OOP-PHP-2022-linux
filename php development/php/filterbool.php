<?php
$var1="Hello";
$var2=23;

var_dump(filter_var($var1, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
echo "<br>";
var_dump(filter_var($var2, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
?>