<?php
spl_autoload(".php");
spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . "/";
    $file = $base_dir . str_replace("\\", "/", $class) . ".php";
    if (file_exists($file)) {
        require $file;
    }
});

$cheeseBurger = new \FoodItems\CheeseBurger();
$fettuccine = new \FoodItems\Fettuccine();
$hawaiianPizza = new \FoodItems\Spaghetti();

$Inavah = new \Persons\Employees\Chef("Inayah Lozano", 40, "Osaka", 1, 30);
$Nadia = new \Persons\Employees\Cashier("Nadia Valentine", 21, "Tokyo", 1, 20);

$saizeriya = new \Restaurants\Restaurant(
    [
        $cheeseBurger,
        $fettuccine,
        $hawaiianPizza
    ],
    [
        $Inavah,
        $Nadia
    ]
);

$interestedTastesMap = [
    "Margherita" => 1,
    "Cheese Burger" => 2,
    "Spaghetti" => 1
];

$tom = new \Persons\Customers\Customer("Tom", 25, "Tokyo", $interestedTastesMap);

$invoice = $tom->order($saizeriya);
$invoice->printInvoice();
