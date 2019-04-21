<?php
  $fp = fopen(CACHE_FILE, 'w+');
  fwrite($fp, ob_get_contents());
  fclose($fp);
  ob_end_flush(); 
?>
