<?php

$xml = file_get_contents("result.xml");

header('Content-Disposition: attachment; filename="generated-ptr.xml"');
header('Content-Type: text/plain');
header('Content-Length: ' . strlen($str));
header('Connection: close');


echo $xml;
