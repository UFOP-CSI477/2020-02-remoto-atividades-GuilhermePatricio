<?php

    require_once 'connection.php';

    $estados = $connection->query("SELECT * FROM produtos");

    require 'produtoView.php';