<?php
/**
 * Created by PhpStorm.
 * User: 1808760
 * Date: 25/02/2019
 * Time: 11:07
 */

define('DB_SERVER', 'CSDM-WEBDEV');
define ('DB_USERNAME','1808760' );
define('DB_PASSWORD', '1808760');
define('DB_DATABASE', 'db1808760_cmm007');

$db = mysqli_connect(DB_SERVER,
    DB_USERNAME, DB_PASSWORD,
    DB_DATABASE);

?>