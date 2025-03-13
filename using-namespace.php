<?php
require_once 'namespaces.php';

// prefix method
$greeting = new Welcome\Greeting();
$greeting->sayHello();

// use operator
// use Welcome\GreetAdmins\AdminGreeting;
// use const Welcome\GreetAdmins\WELCOME;
// use function Welcome\GreetAdmins\welcome;

// require_once 'nesting-namespaces.php';

// $greeting = new AdminGreeting();
// $greeting->sayHelloToAdmin();

// echo "<br>";
// echo WELCOME;
// echo "<br>";

// welcome();

