<?php
declare(strict_types=1);
use Platformsh\ConfigReader\Config;
require __DIR__.'/../vendor/autoload.php';

$config = new Platformsh\ConfigReader\Config();
if (!$config->isValidPlatform()) {
    die("Not in a Platform.sh Environment.");
}

$credentials = $config->credentials('database');
$dsn = sprintf('mysql:host=%s;port=%d;dbname=%s', $credentials['host'], $credentials['port'], $credentials['path']);
echo "$dsn";
?>
