<?php

namespace MyApp\DB;

use MyApp\DB\Interfaces\iDatabaseConfigs;

class DbConfigMySql implements iDatabaseConfigs
{
    private $ini;
    private $dsn;

    public function __construct($iniPath)
    {
        $this->ini = parse_ini_file($iniPath);
        $this->dsn = 'mysql:host=' . $this->ini['host'] . ';dbname=' . $this->ini['name'];
    }

    public function setIni($ini)
    {
        $this->ini = $ini;
    }

    public function setDsn($dsn)
    {
        $this->dsn = $dsn;
    }

    public function getIni()
    {
        return $this->ini;
    }

    public function getDsn()
    {
        return $this->dsn;
    }
}
