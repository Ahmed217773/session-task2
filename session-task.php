<?php


$users = [
    ["id" => 1, "firstName" => "Ahmed", "lastName" => "Lutfi", "salary" => 15000, "email" => "Ahmedlutfi@gmail.com", "isActive" => 1],
    ["id" => 2, "firstName" => "mohamed", "lastName" => "ahmed", "salary" => 7500, "email" => "mohamed@example.com", "isActive" => 0],
    ["id" => 3, "firstName" => "Omar", "lastName" => "Ashraf", "salary" => 11000, "email" => "omar@example.com", "isActive" => 1],
    ["id" => 4, "firstName" => "abderahman", "lastName" => "hilal", "salary" => 3000, "email" => "abdelrahman@example.com", "isActive" => 1],
    ["id" => 5, "firstName" => "taha", "lastName" => "mohamed", "salary" => 6000, "email" => "taha@example.com", "isActive" => 0],
    ["id" => 6, "firstName" => "Sarah", "lastName" => "nabil", "salary" => 9000, "email" => "sarah@example.com", "isActive" => 1],
    ["id" => 7, "firstName" => "mai", "lastName" => "bhaa", "salary" => 8000, "email" => "mai@example.com", "isActive" => 0],
    ["id" => 8, "firstName" => "ziad", "lastName" => "hkalid", "salary" => 12000, "email" => "ziad@example.com", "isActive" => 1],
    ["id" => 9, "firstName" => "osama", "lastName" => "mohamed", "salary" => 4000, "email" => "osama@example.com", "isActive" => 1],
    ["id" => 10, "firstName" => "abdalla", "lastName" => "said", "salary" => 9500, "email" => "abdalla@example.com", "isActive" => 0]
];


foreach ($users as $user) {
    echo implode( ", ",$user) . "<br>";
}
echo "<br>";
////////////////////////
foreach ($users as $user) {
    $salary = $user['salary'];
    if ($salary < 5000) {
        echo $user['firstName'] . " " . $user['lastName'] . ": Junior" . "<br>";
    } elseif ($salary >= 5000 && $salary <= 10000) {
        echo $user['firstName'] . " " . $user['lastName'] . ": Senior" . "<br>";
    } else {
        echo $user['firstName'] . " " . $user['lastName'] . ": Tech Lead" . "<br>";
    }
}
echo "<br>";
///////////////////////////////////////
session_start();
foreach ($users as $user) {
    if ($user["isActive"] == 1) {
        $_SESSION['active_users'][] = $user["id"];
    }
}
echo "Active User IDs stored in SESSION: ";
echo "<br>";
///////////////////////////////
echo "<br>";
foreach ($users as $user) {
    if ($user['isActive'] == 1) {
        echo $user['firstName'] . " " . $user['lastName'] . " Active" . "<br>";
    }
}

?>