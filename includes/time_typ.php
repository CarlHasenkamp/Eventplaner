<?php
session_start();
if (isset($_POST['btn_for'])) {
    if (!empty($_POST['vertyp'])) {
        $_SESSION['vertyp'] = $_POST['vertyp'];
        $_SESSION['Uhr'] = $_POST['Uhr'];

        header("Location: ../pages/" . $_POST['vertyp'] . ".php");
    } else {
        $_SESSION['status'] = 'Unbefugter eingriff';
        header("Location: ../Seite1.php");
    }
} else if (isset($_POST['btn_back'])) {
    $_SESSION['vertyp'] = $_POST['vertyp'];
    $_SESSION['Uhr'] = $_POST['Uhr'];

    header("Location: ../Seite1.php");
} else {
    $_SESSION['status'] = 'Unbefugter eingriff';
    header("Location: ../Seite1.php");
}
