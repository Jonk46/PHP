<?php 

$myecho = function () 
{
 if (func_num_args() > 0) {
 $str = "";
 foreach (func_get_args() as $value) {
 $str .= "{$value}<br>"; 
 }
 echo $str;
 }
};
$myecho("dfdfd",'sdfsdf');
exit;
