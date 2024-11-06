<?php


    require_once "baza.php";

    $rezultat = $baza->query("SELECT * FROM korisnici");



    if($rezultat->num_rows > 0){
        echo "nasli smo: ".$rezultat->num_rows." korisnika","<br>";

        // fetch_all -> vrati mi sve korisnike
        // MYSQLI_ASSOC -> vrati mi assoc array

        $korisnici = $rezultat->fetch_all(MYSQLI_ASSOC);

        foreach($korisnici as $korisnik){
            echo $korisnik['email'];
        }

    }
    else {
        echo "nismo nasli nijednog korisnika";
    }

