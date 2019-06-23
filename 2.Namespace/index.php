<?php
//require_once('./Person.php');
require_once('autoload.php');
use Entity\Person;
//use Entity\Dog as DogPerson;

$person = new Person;
$person->sayHello();
