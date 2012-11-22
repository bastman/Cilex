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

use Cilex\Application;
use Cilex\Command\GreetCommand;
use Cilex\Command\TestCommand;

$app = new Application('Cilex');
$app->command(new TestCommand());
$app->command(new GreetCommand());
$app->run();