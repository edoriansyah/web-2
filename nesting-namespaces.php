<?php
namespace Welcome\GreetAdmins;

class AdminGreeting
{
    public function sayHelloToAdmin()
    {
        echo "Hello from AdminGreeting class inside the GreetAdmins inside the Welcome namespace!";
    }
}

const WELCOME = "Welcome to the Welcome/GreetAdmins namespace!";

function welcome()
{
    echo "Hello from welcome() function inside the Welcome/GreetAdmins namespace!";
}

