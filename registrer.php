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

$rezultat = $baza->query("INSERT INTO korisnici (email,lozinka) VALUES('$email','$lozinka')");