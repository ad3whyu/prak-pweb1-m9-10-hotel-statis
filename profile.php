<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<h1>Welcome, <?= $_SESSION['nama']; ?>!</h1>
<p>Your username is: <?= $_SESSION['username']; ?></p>
