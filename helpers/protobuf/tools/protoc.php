<?php
// just create from the proto file a pb_prot[NAME].php file
require_once(__DIR__ . '/../parser/pb_parser.php');

array_shift($argv);
$test = new PBParser();
while ($filename = array_shift($argv)) {
    echo $filename , "\n";
    $test->parse($filename);
    echo "parsing {$filename} ...\n";
}

echo "File parsing done!\n";
?>
