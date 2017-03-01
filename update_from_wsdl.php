<?php

require 'vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => $argv[1],
        'outputDir' => './AMP',
        'namespaceName' => 'Williams\ConnectshipBundle\AMP'
    ))
);