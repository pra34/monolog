<?php
require_once("vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\formatter\LineFormatter;

// Create the logger
$logger = new Logger('monologger');

// Now add some handlers
$handler = new RotatingFileHandler(__DIR__.'/log/log.log');

//format
$handler->setFormatter(new LineFormatter("[%datetime%] %channel%.%level_name%: %message% %context% \n"));

$logger->pushHandler($handler);

try {

    // You can now use your logger
    $logger->addInfo('info-log ->', array(
                                        'message' => 'This is a information log', 
                                        'another message' => 'What could be another message'
                                        ));
    $logger->addDebug('debug-log ->', array(
                                        'message' => 'This is a debugging log', 
                                        'another message' => 'What could be another message'
                                        ));

} catch(Exception $e) {
    $logger->addError('error-log ->', array( 
                                        'message' => 'This error log will not be catch', 
                                        'another message' => $e->getMessage()
                                        ));
}   