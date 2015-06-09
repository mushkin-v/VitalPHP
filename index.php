<?php

require_once __DIR__.'/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$clientIp = $request->getClientIp();

$input = $request->get('name', 'World');

$response = new Response(sprintf('Hello %s from vitalPHP! Your IP is %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8'), $clientIp));

$response->send();