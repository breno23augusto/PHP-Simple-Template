<?php

namespace MyApp\DB\interfaces;

interface iDatabaseConfigs
{
    public function setIni($ini);
    public function setDsn($dsn);
    public function getIni();
    public function getDsn();
}
