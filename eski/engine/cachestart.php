<?php
  define("CACHE_FILE_NAME","%%-".md5($_SERVER['REQUEST_URI'])."-%%.html", false);
  define("CACHE_FILE","mycache/".CACHE_FILE_NAME, false);
  define("CACHE_TIME", 60, false);
  if (file_exists(CACHE_FILE))
  {
      if(time() - CACHE_TIME < filemtime(CACHE_FILE))
      {
          readfile(CACHE_FILE);
          exit;
      }
      else
      {
          unlink(CACHE_FILE);
      }
  }
  ob_start();
?>
