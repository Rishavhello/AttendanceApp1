<?php

/**
 * @author gencyolcu
 * @copyright 2017
 */

$my_file = 'temp_register.txt';
$handle = fopen($my_file,'a');

$roll = 'k';//roll number of student from android studio;
$insert = $roll."\n";
fwrite($handle,$insert);       

?>