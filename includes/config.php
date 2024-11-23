<?php 
// DB credentials.
define('DB_HOST','junction.proxy.rlwy.net');
define('DB_PORT', '27959');
define('DB_USER','root');
define('DB_PASS','OCqXvInvVWBGDBMoxPWtaXVTEFpVoePa');
define('DB_NAME','tms1');
// Establish database connection.
//mysql://root:OCqXvInvVWBGDBMoxPWtaXVTEFpVoePa@junction.proxy.rlwy.net:27959/railway

//host: junction.proxy.rlwy.net
//puerto: 27959
//password: OCqXvInvVWBGDBMoxPWtaXVTEFpVoePa
//dbname: railway

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>