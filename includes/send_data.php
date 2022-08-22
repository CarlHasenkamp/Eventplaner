<?php
if (isset($_POST['btn_back']) || isset($_POST['btn_for'])) {
    if (isset($_POST['btn_back'])) {
        $richtung = "../Seite2.php";
        header("Location: " . $richtung);
    } else {
    }
}
