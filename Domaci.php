<?php


    require_once "baza.php";

    if (  !isset($_POST["email"]) || !isset($_POST["password"]) || empty($_POST["email"]) || empty($_POST["password"])  ) {
        die("niste prosledili email ili lozinku");
    }


    $email = $_POST["email"];
    $password = $_POST["password"];


    $baza->query("INSERT INTO korisnici(email,sifra) VALUES('$email','$password')");