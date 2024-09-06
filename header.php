<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
        <div class="wrapper">
            <div class="logo">
            <img src="img/logo.png" alt="logo">
            </div>
            <div class="navbar">
        <div class="hamburger" onclick="toggleNavbar()">
            &#9776; <!-- Hamburger menu icon -->
        </div>
        <nav id="myNavbar" class="nav-links">
            <a href="index.php">home</a>
            <a href="vakken.php">vakken</a>
            <a href="docenten.php">docenten</a>
            <a href="rooster.php">rooster</a>
        </nav>
    </div>

    <script src="script.js"></script>

