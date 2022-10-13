<?php
require __DIR__. '/../vendor/autoload.php';

$cow = new CowSay\Cow('hello wilder');
echo $cow->setTongue('U');