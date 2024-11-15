<?php


    require_once "baza.php";

    if (  !isset($_POST["email"]) || empty($_POST["email"])  ) {
        die("niste prosledili email");
    }

    if (  !isset($_POST["password"])  || empty($_POST["password"])  ) {
        die("niste prosledili lozinku");
    }


    $email = mysqli_real_escape_string( $baza, $_POST["email"] );
    $password = mysqli_real_escape_string( $baza, $_POST["password"] );



    $baza->query("INSERT INTO korisnici(email,sifra) VALUES('$email','$password')");