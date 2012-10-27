<?php

use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\ApacheRequest;

umask(0000);

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';
$loader = new ApcClassLoader('SymfonyBigaEdition', $loader);
$loader->register(true);

require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
$response = $kernel->handle($request = ApacheRequest::createFromGlobals());
$response->send();
$kernel->terminate($request, $response);
