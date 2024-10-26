<?php

$baza = mysqli_connect("localhost", "root", "", "vezbe");

if (!isset($_POST['email']) || empty($_POST['email'])) {
    die("Morate uneti email");
}

if (!isset($_POST['lozinka']) || empty($_POST['lozinka'])) {
    die("Morate uneti lozinku");
}


$email = $_POST['email'];
$lozinka = $_POST['lozinka'];

$rezultat = $baza->query("SELECT * FROM korisnici WHERE email='$email'");

if ($rezultat->num_rows == 1) {
    $korisnik = $rezultat->fetch_assoc();
} else {
    echo "Korisnik ne postoji!";
}