<?php

use Source;

$obFile = new Source\FileRead();
$count = $obFile->workWithFile();

print $count;