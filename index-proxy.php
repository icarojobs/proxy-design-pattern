<?php

require_once './vendor/autoload.php';

use App\Proxy\Proxy;
use App\Proxy\RealSubject;
use App\Proxy\SubjectInterface;

function clientCode(SubjectInterface $subject)
{
    $subject->request();
}

echo "Client: Executing the client code with a real subject: ";
$realSubject = new RealSubject();
clientCode($realSubject);

echo PHP_EOL;
echo PHP_EOL;

echo "Client: Executing the same client code with a proxy: ";
$proxy = new Proxy($realSubject);
clientCode($proxy);