<?php

require "dbBroker.php";
require "model/korisnik.php";

session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $uname = $_POST['username'];
    $upass = $_POST['password'];

    $korisnik = new Korisnik(1, $uname, $upass);
   
    $odg = Korisnik::logInUser($korisnik, $conn);

    if($odg->num_rows==1){
        echo  `
        <script>
        console.log( "Uspešno ste se prijavili");
        </script>
        `;
        $_SESSION['user_id'] = $korisnik->id;
        header('Location: home.php');
        exit();
    }else{
        echo `
        <script>
        console.log( "Niste se prijavili!");
        </script>
        `;
    }

}

?>