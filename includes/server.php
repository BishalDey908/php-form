<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
   
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $email = htmlspecialchars($_POST["email"]);
    $favGame = htmlspecialchars($_POST["favGame"]);

    if(empty($firstName )){
        header("Location: ../form.php");
    }

    echo "<h1>User Submitted Datas Are</h1>";
    echo "<br>";
    echo "<p>First Name is $firstName </p>";
    echo "<br>";
    echo "<p>Last Name is $lastName</p>";
    echo "<br>";
    echo "<p>Email is $email</p>";
    echo "<br>";
    echo "<p>Favourit game is $favGame</p>";
}else{
    header("Location: ../form.php");
}