<?php

  require_once 'Truck.php';
  require_once 'Bike.php';
  
  $bmx = new Bike('Red', 40, 0, 0);
  
  echo "Created Bmx bike.\nStatus:\n";
  $bmx->status();
  $bmx->cadenceStatus();
  
  echo "Set the cadence to 10\n";
  $bmx->setCadence(10);
  $bmx->status();
  $bmx->cadenceStatus();
  echo "\nAccelerate by 15:\n";
  $bmx->accelerate(15, 1); // Provide both acceleration power and time
  $bmx->status();
  $bmx->cadenceStatus();
  
  echo "\nRing bell.\n";
  $bmx->ringBell();
  
  $bigTruck = new Truck('Grey', 0, 200, 'HGC-3456F');
  
  echo "\nCreated a Truck.\nStatus:\n";
  $bigTruck->setTires(6);
  $bigTruck->status();
  $bigTruck->plateStatus();
  echo "\nAccelerating, 10 of power for ten seconds:\n";
  $bigTruck->accelerate(10, 10);
  
  echo "\nBraking, 5 of power and 5 air pressure for 5 sec.\n";
  $bigTruck->brake(5, 5, 5);

echo "\nDone.\n";
