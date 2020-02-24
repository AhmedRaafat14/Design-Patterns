<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Behavioral\COR\Entity\Person;
use Behavioral\COR\Entity\Car;
use Behavioral\COR\Handlers\PeopleHandler;
use Behavioral\COR\Handlers\CarsHandler;

# Create a person object
$person = new Person();
$person->setName('Ahmad');
$person->setAge(26);
$person->setGender('Male');

# Create a car object
$car = new Car();
$car->setModel('2020 BMW 2-Series Gran Coupe');
$car->setManufacturer('BMW');

# Define the Handlers and create the COR
$peopleHandler = new PeopleHandler();
$carsHandler = new CarsHandler();

$peopleHandler->setNext($carsHandler);


# Let's see in practice
foreach ([$person, $car, "tests"] as $object) {
    echo "Client: Who wants to handle me {$object}? \n";
    $result = $peopleHandler->handle($object);

    if ($result) {
        echo '   ' . $result . "\n";
    } else {
        echo '   <' . $object . "> was left untouched.\n";
    }
    echo "\n\n";
}