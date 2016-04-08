<?php
/**
* Function Description
* @param function_parameter
* @returns function output description
*/
function myfunctionlibone() {
$file = 'dump.txt';
// Open the file to get existing content
// Append a new person to the file
// Write the contents back to the file
echo file_put_contents($file, "siema");
}
function myfunctionlibtwo($sub) {
$file = 'dump.txt';
$current = file_get_contents($file);
$current .= $sub;
echo file_put_contents($file, $current);


}
?>