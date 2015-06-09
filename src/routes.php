<?php

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

function is_leap_year($year = null) {
if (null === $year) {
$year = date('Y');
}

return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
}

$routes = new Routing\RouteCollection();
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
'year' => null,
'_controller' => function ($request) {
if (is_leap_year($request->attributes->get('year'))) {
return new Response('Yes, it is leap year!');
}

return new Response('No, it is not leap year!');
}
)));

return $routes;