<?php
/**
Normalized Compression Distance (NCD)

*/
function ncd($x, $y) { 
  $cx = strlen(gzcompress($x));
  $cy = strlen(gzcompress($y));
  return (strlen(gzcompress($x . $y)) - min($cx, $cy)) / max($cx, $cy);
}   

echo ncd('Lorem Ipsum', 'Not even related to first text.');
?>
