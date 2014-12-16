<?php
/**
Normalized Compression Distance (NCD)

*/
function p($x, $y) { 
  $p1 = strlen(gzcompress($x));
  $p2 = strlen(gzcompress($y));
  return (strlen(gzcompress($x . $y)) - min($p1, $p2)) / max($p1, $p2);
}   

echo p('Lorem Ipsum', 'Not even related to first text.');
?>
