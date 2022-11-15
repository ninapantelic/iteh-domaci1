<?php
$host = "localhost";
$db = "rezervacije";
$user = "root";
$pass = "";

$conn = new mysqli($host,$user,$pass,$db);


if ($conn->connect_errno){
    exit("Konekcija neuspesno uspostavljena: " . $conn->connect_errno);
}

?>