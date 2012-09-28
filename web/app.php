<?php

use Symfony\Component\ClassLoader\ApcClassLoader;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ApacheRequest;

umask(0000);

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';

// Use APC for autoloading to improve performance
// Change 'sf2' by the prefix you want in order to prevent key conflict with another application
$loader = new ApcClassLoader('SymfonyBigaEdition', $loader);
$loader->register(true);

require_once __DIR__.'/../app/AppKernel.php';
//require_once __DIR__.'/../app/AppCache.php';

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel   = new AppCache($kernel);
$response = $kernel->handle(Request::createFromGlobals());
$response->send();
$kernel->terminate($request, $response);
