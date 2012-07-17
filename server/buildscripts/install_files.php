<?php

chdir(dirname(__FILE__) . "/../../");

$files = array(
  "app/config/parameters_default.ini" => "app/config/parameters.ini",
  "server/live_default.conf" => "server/live.conf",
  "server/staging_default.conf" => "server/staging.conf"
);

$replacements = array();

foreach (glob("../vars/*") as $varname)
{
  $replacements[$varname] = file_get_contents($varname);
}

foreach ($files as $infile => $outfile)
{
  $output = 
    str_replace(
      array_keys($replacements), 
      array_values($replacements), 
      file_get_contents($infile)
    )
  ;
  
  $matches = array();
  
  if (!preg_match_all("/\%\%(?P<variables>[a-z0-9A-Z_-]+)\%\%/", $output, $matches)) {
    if (file_put_contents($outfile, $output))
    {
      echo "[OK] " . $outfile . "\n";
      chmod($outfile, 0440); // ugo-rwx, ug+r -- only user+group can read
    }
    else 
    {
      file_put_contents("php://stderr", "[ER] Could not write to '" . $outfile . "'\n");
      exit(1);
    }
  } else {
    file_put_contents("php://stderr", "[ER] Missing variable" . (count($matches["variables"]) > 1 ? "s" : "") . " for '" . $infile . "' - '" . join("', '", $matches["variables"]) . "'\n");
    exit(1);
  }
}