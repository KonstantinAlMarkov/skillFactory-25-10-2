<?php
declare(strict_types=1);
include 'machines.php';
function switchEngineState(VehicleAbilities $vehicle) 
{
    if ($vehicle->getEngineStatus()) $vehicle->stopEngine();
    else $vehicle->startEngine();
}

function moveForwardAndHonk(VehicleAbilities $vehicle)
{
    //$vehicle->moveForward();
    $vehicle->honk();
}

function moveForwardAndRotate(CatterpillarVehicleAbilities $vehicle)
{
    $vehicle->moveForward();
    $vehicle->rotate();
}


$automobile = new Automobile();
$truck = new Truck();
$crane = new CaterpillarCrane();

var_dump($truck->honk());
switchEngineState($automobile);
moveForwardAndHonk($automobile);
moveForwardAndHonk($truck);
moveForwardAndRotate($crane);
?>