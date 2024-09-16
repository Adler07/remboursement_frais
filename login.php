<?php 
    $users = [
        [
        "email" => "user1@example.com",
        "password" => "password123",
        "name" => "Jean",
        "surname" => "Dupont",
        "role" => "admin"
        ],
        [
        "email" => "user2@example.com",
        "password" => "password456",
        "name" => "Marie",
        "surname" => "Dupont",
        "role" => "user"
        ],
    ];

    var_dump($users); //Pour voir toutes les données et leur type

// Au lieu d'utiliser isset -> 

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Si le serveur reçoit une requête post
    $email = $_POST["email"];
    $password = $_POST["password"];
    foreach ($users as $user) {
        if ($user["email"] == $email && $user["password"] == $password) {
            echo "Bonjour, ". $user["name"] . " " . $user["surname"] . "<br/>";
            echo "Vous êtes maintenant connecté comme un " . $user["role"] . "<br/>";
            exit;
        }
    }
    echo "Email ou mot de passe incorrect";
} 