<?php
/**
 * Created by JetBrains PhpStorm.
 * User: seb
 * Date: 11/22/12
 * Time: 12:26 PM
 * To change this template use File | Settings | File Templates.
 */

//require_once __DIR__ . '/bin/cilex.phar';
require __DIR__ . "/vendor/autoload.php";

$app = new \Cilex\Application('Cilex');
$app->command(new \Cilex\Command\TestCommand());
$app->command(new \Cilex\Command\GreetCommand());
$app->run();