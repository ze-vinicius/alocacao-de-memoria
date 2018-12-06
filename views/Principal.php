<?php
include "../models/Memory.php";
use Memory\Memory;

$memory = new Memory();
$memory->initMemory([10, 5, 26, 8]);

$value = $_POST['value'];
$memory->addProcessBestFit($value);

print_r($memory->getCells());
