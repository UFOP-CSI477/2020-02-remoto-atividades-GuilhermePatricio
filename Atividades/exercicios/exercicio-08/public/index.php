<?php
require '../vendor/autoload.php';

use App\Database\Connection;
use App\Database\AdapterSQLite;

$connection = new Connection(new AdapterSQLite());
$connection->getAdapter()->open();


require '../App/Views/estadoView.php';

require '../App/Views/produtoView.php';
