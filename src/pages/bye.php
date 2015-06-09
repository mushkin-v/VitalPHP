<!-- /src/pages/hello.php -->

Bye!
<br/>
<?php

use Symfony\Component\Routing;

$dumper = new Routing\Matcher\Dumper\PhpMatcherDumper($routes);

echo $dumper->dump();