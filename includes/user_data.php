<?php
session_start();
if (isset($_POST['btn_for'])) {
    if (!empty($_POST['Nachname']) && !empty($_POST['Vorname']) && !empty($_POST['Email'])) {
        $_SESSION['Nachname'] = $_POST['Nachname'];
        $_SESSION['Vorname'] = $_POST['Vorname'];
        $_SESSION['Email'] = $_POST['Email'];
        header("Location: ../Seite2.php");
    } else {
        $_SESSION['status'] = 'Bitte füllen Sie alle Felder aus!';
        header("Location: ../Seite1.php");
    }
} else if (isset($_POST['btn_back'])) {
    $_SESSION['Nachname'] = $_POST['Nachname'];
    $_SESSION['Vorname'] = $_POST['Vorname'];
    $_SESSION['Email'] = $_POST['Email'];
    header("Location: ../index.php");
} else {
    $_SESSION['status'] = 'Unbefugter eingriff';
    header("Location: ../Seite1.php");
}
