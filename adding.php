<?php

$baza = mysqli_connect("localhost", "root", "", "vezbe");

if (!isset($_POST['ime']) || empty($_POST['ime'])) {
    die("Morate uneti ime");
}

if (!isset($_POST['pisac']) || empty($_POST['pisac'])) {
    die("Morate uneti pisca");
}

if (!isset($_POST['cena']) || empty($_POST['cena'])) {
    die("Morate uneti cenu");
}

$ime = $_POST['ime'];
$pisac = $_POST['pisac'];
$cena = $_POST['cena'];

$rezultat = $baza->query("INSERT INTO riznica(ime,pisac,cena) VALUES('$ime','$pisac',$cena) ");

