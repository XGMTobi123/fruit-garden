<?php
require "app\Garden.php";
require "app\Tree.php";
require "app\AppleTree.php";
require "app\PearTree.php";
//INIT
$trees=Garden::GardenInit();
//

$fruits = Garden::CountAllFruitsFromTrees($trees);
foreach ($fruits as $key=>$value)
{
    echo "You have $value $key" . PHP_EOL;
}

