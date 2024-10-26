<?php

$baza = mysqli_connect("localhost", "root", "", "vezbe");


if (!isset($_POST['ime']) || empty($_POST['ime'])) {
    die("Morate uneti proizvod");
}

$ime = $_POST['ime'];

$rezultat = $baza->query("SELECT * FROM riznica WHERE ime ='$ime'");

if ($rezultat->num_rows == 1) {
    $ime = $rezultat->fetch_assoc();
    echo "Proizvod pronadjen!";
} else {
    echo "Proizvod ne postoji!";
}