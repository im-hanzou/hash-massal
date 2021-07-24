<?php
// copyright 2021
echo shell_exec('clear');
echo "coder by shine\nhash massal\n\n";
function hash_m($file){
$ago = hash_algos();
echo "query: ";
$que = trim(fgets(STDIN));
for($i=0;$i<count($ago);$i++){
  print($i.'. '.$ago[$i]." => ".hash($ago[$i],$que))."\n";
$save = fopen($file, 'a');
fwrite($save, "$i. $ago[$i] => ".hash($ago[$i], $que)."\n");
 }
}
$file = trim(readline('save to file: '));
hash_m($file);
