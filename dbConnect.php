<?php
/**
 * Created by PhpStorm.
 * User: 1808760
 * Date: 25/02/2019
 * Time: 11:07
 */

define('DB_SERVER', 'localhost:8889');
define ('DB_USERNAME','mike' );
define('DB_PASSWORD', 'pepit01');
define('DB_DATABASE', 'marvelmovies');

$db = mysqli_connect(DB_SERVER,
    DB_USERNAME, DB_PASSWORD,
    DB_DATABASE);

?>