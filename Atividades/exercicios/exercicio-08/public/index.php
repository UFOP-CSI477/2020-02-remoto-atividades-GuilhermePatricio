<?php

require '../vendor/autoload.php';

use App\Models\Estado;
use App\Database\Connection;
use App\Database\AdapterSQLite;
 


$connection = new Connection(new AdapterSQLite());

$connection->getAdapter()->open();