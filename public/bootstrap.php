<?php
$iniFilePath = "../src/myp_app/DB/";
$iniFileTest = $iniFilePath . "db_local.ini";
$iniFileProd = $iniFilePath . "db.ini";
define("BASE_TYPE", "T");
$iniPath = BASE_TYPE == 'P' ? $iniFileProd : $iniFileTest;
define("INI_PATH", $iniPath);
