<?php

/**
 * Configuration for database connection
 *
 */

$host       = "dbserverbanbifaz01-mysqldbserver.mysql.database.azure.com";
$username   = "mysqldbuser@dbserverbanbifaz01-mysqldbserver";
$password   = "83nT>-pM%{uqUPK&";
$dbname     = "dbbanbifaz01";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );