<?php
if (isset($_POST['btn_back']) || isset($_POST['btn_for'])) {
    if (isset($_POST['btn_back'])) {
        $richtung = "../Seite2.php";
    } else {
        $richtung = "../pages/vorschau.php";
    }

    session_start();
    // Tontechnik
    $eventtype = $_SESSION['vertyp'];
    $_SESSION['checkbox_mikro'] = false;
    $_SESSION['funkmikro'] = 0;
    $_SESSION['kabelmikro'] = 0;
    $_SESSION['anmerkung_mikro'] = "";
    $_SESSION['checkbox_musik'] = false;
    $_SESSION['link_playlist'] = "";
    $_SESSION['file_musikfile'] = 'Dateiauswahl (Max 100 Megabyte)';
    $_SESSION['anmerkung_musik'] = "";
    $_SESSION['checkbox_instrumente'] = false;
    $_SESSION['list_instrumente'] = "";
    $_SESSION['anmerkung_instrumente'] = "";
    //Lichttechnik
    $_SESSION['checkbox_verfolger'] = false;
    //videotechnik
    $_SESSION['checkbox_livestream'] = false;
    $_SESSION['plattform'] = "";
    $_SESSION['titel_livestream'] = "";
    $_SESSION['sichtbarkeit'] = "";
    $_SESSION['checkbox_livechat']  = false;
    $_SESSION['anmerkung_livestream'] = "";
    $_SESSION['checkbox_aufzeichnen'] = false;
    //Allgemeines
    $_SESSION['checkbox_beamer'] = false;
    $_SESSION['checkbox_ppp'] = false;
    $_SESSION['file_ppp'] = 'Dateiauswahl (Max 100 Megabyte)';

    $_SESSION['checkbox_ablaufplan'] = false;
    $_SESSION['file_ablaufplan'] = 'Dateiauswahl (Max 100 Megabyte)';
    $_SESSION['checkbox_drehbuch'] = false;
    $_SESSION['file_drehbuch'] = 'Dateiauswahl (Max 100 Megabyte)';
    $_SESSION['checkbox_nebelmaschine'] = false;
    $_SESSION['checkbox_pult'] = false;
    $_SESSION['checkbox_tafel'] = false;
    $_SESSION['checkbox_fragen'] = "";
    $_SESSION['file_musikfile_destination'] = "../storage/";
    $_SESSION['file_ppp_destination'] = "../storage/";
    $_SESSION['file_ablaufplan_destination'] = "../storage/";
    $_SESSION['file_drehbuch_destination'] =  "../storage/";




    if (isset($_POST['eventtype'])) {

        $_SESSION['newvertyp'] = $_POST['eventtype'];
    }
    if (isset($_POST['checkbox_mikro'])) {
        $checkbox_mikro = $_POST['checkbox_mikro'];
        $_SESSION['checkbox_mikro'] = $checkbox_mikro;
        if (isset($_POST['anmerkung_mikro'])) {
            $anmerkung_mikro = $_POST['anmerkung_mikro'];
            $_SESSION['anmerkung_mikro'] = $anmerkung_mikro;
        }
        if (isset($_POST['funkmikro'])) {
            $funkmikro = $_POST['funkmikro'];
            $_SESSION['funkmikro'] = $funkmikro;
        }
        if (isset($_POST['kabelmikro'])) {
            $kabelmikro = $_POST['kabelmikro'];
            $_SESSION['kabelmikro'] = $kabelmikro;
        }
    }
    if (isset($_POST['checkbox_musik'])) {
        $checkbox_musik = $_POST['checkbox_musik'];
        $_SESSION['checkbox_musik'] = $checkbox_musik;
        if (isset($_POST['link_playlist'])) {
            $link_playlist = $_POST['link_playlist'];
            $_SESSION['link_playlist'] = $link_playlist;
        }
        if (isset($_FILES['file_musikfile'])) {
            $file_musikfile = $_FILES['file_musikfile'];

            if ($file_musikfile != 'Dateiauswahl (Max 100 Megabyte') {
                if ($file_musikfile["size"] < 100000000) {
                    $tmp_name = $file_musikfile["tmp_name"];
                    // basename() kann Directory-Traversal-Angriffe verhindern;
                    // weitere Validierung/Bereinigung des Dateinamens kann angebracht sein
                    $name = basename($file_musikfile["name"]);
                    $destination = "../storage/" . $name;
                    move_uploaded_file($tmp_name, $destination);
                    $_SESSION['file_musikfile'] = $name;
                    $_SESSION['file_musikfile_destination'] = $destination;
                } else {
                    $_SESSION['status'] = 'Die Musikdatei ist größer als die erlaubten 100 Megabyte';
                    header("Location: ../Seite1.php");
                }
            }
        }
        if (isset($_POST['anmerkung_musik'])) {
            $anmerkung_musik = $_POST['anmerkung_musik'];
            $_SESSION['anmerkung_musik'] = $anmerkung_musik;
        }
    }
    if (isset($_POST['checkbox_instrumente'])) {
        $checkbox_instrumente = $_POST['checkbox_instrumente'];
        $_SESSION['checkbox_instrumente'] = $checkbox_instrumente;
        if (isset($_POST['list_instrumente'])) {
            $list_instrumente = $_POST['list_instrumente'];
            $_SESSION['list_instrumente'] = $list_instrumente;
        }
        if (isset($_POST['anmerkung_instrumente'])) {
            $anmerkung_instrumente = $_POST['anmerkung_instrumente'];
            $_SESSION['anmerkung_instrumente'] = $anmerkung_instrumente;
        }
    }
    if (isset($_POST['checkbox_verfolger'])) {
        $checkbox_verfolger = $_POST['checkbox_verfolger'];
        $_SESSION['checkbox_verfolger'] = $checkbox_verfolger;
    }
    if (isset($_POST['checkbox_livestream'])) {
        $checkbox_livestream = $_POST['checkbox_livestream'];
        $_SESSION['checkbox_livestream'] = $checkbox_livestream;
        if (isset($_POST['plattform'])) {
            $plattform = $_POST['plattform'];
            $_SESSION['plattform'] = $plattform;
        }
        if (isset($_POST['titel_livestream'])) {
            $titel_livestream = $_POST['titel_livestream'];
            $_SESSION['titel_livestream'] = $titel_livestream;
        }
        if (isset($_POST['sichtbarkeit'])) {
            $sichtbarkeit = $_POST['sichtbarkeit'];
            $_SESSION['sichtbarkeit'] = $sichtbarkeit;
        }
        if (isset($_POST['checkbox_livechat'])) {
            $checkbox_livechat = $_POST['checkbox_livechat'];
            $_SESSION['checkbox_livechat'] = $checkbox_livechat;
        }
        if (isset($_POST['anmerkung_livestream'])) {
            $anmerkung_livestream = $_POST['anmerkung_livestream'];
            $_SESSION['anmerkung_livestream'] = $anmerkung_livestream;
        }
    }
    if (isset($_POST['checkbox_aufzeichnen'])) {
        $checkbox_aufzeichnen = $_POST['checkbox_aufzeichnen'];
        $_SESSION['checkbox_aufzeichnen'] = $checkbox_aufzeichnen;
    }

    if (isset($_POST['checkbox_beamer'])) {
        $checkbox_beamer = $_POST['checkbox_beamer'];
        $_SESSION['checkbox_beamer'] = $checkbox_beamer;
    }
    if (isset($_POST['checkbox_ppp'])) {
        $checkbox_ppp = $_POST['checkbox_ppp'];
        $_SESSION['checkbox_ppp'] = $checkbox_ppp;

        if (isset($_FILES['file_ppp'])) {
            $file_ppp = $_FILES['file_ppp'];
            if ($file_ppp != 'Dateiauswahl (Max 100 Megabyte') {
                if ($file_ppp["size"] < 100000000) {
                    $tmp_name = $file_ppp["tmp_name"];
                    // basename() kann Directory-Traversal-Angriffe verhindern;
                    // weitere Validierung/Bereinigung des Dateinamens kann angebracht sein
                    $name1 = basename($file_ppp["name"]);
                    $destination = "../storage/" . $name1;
                    move_uploaded_file($tmp_name, $destination);
                    $_SESSION['file_ppp_destination'] = $destination;
                    $_SESSION['file_ppp'] = $name1;
                } else {
                    $_SESSION['status'] = 'Die Präsentation ist größer als die erlaubten 100 Megabyte';
                    header("Location: ../Seite1.php");
                }
            }
        }
    }
    if (isset($_POST['checkbox_ablaufplan'])) {
        $checkbox_ablaufplan = $_POST['checkbox_ablaufplan'];
        $_SESSION['checkbox_ablaufplan'] = $checkbox_ablaufplan;
        if (isset($_FILES['file_ablaufplan'])) {
            $file_ablaufplan = $_FILES['file_ablaufplan'];
            if ($file_ablaufplan != 'Dateiauswahl (Max 100 Megabyte') {
                if ($file_ablaufplan["size"] < 100000000) {
                    $tmp_name = $file_ablaufplan["tmp_name"];
                    // basename() kann Directory-Traversal-Angriffe verhindern;
                    // weitere Validierung/Bereinigung des Dateinamens kann angebracht sein
                    $name = basename($file_ablaufplan["name"]);
                    $destination = "../storage/" . $name;
                    move_uploaded_file($tmp_name, $destination);
                    $_SESSION['file_ablaufplan_destination'] = $destination;
                    $_SESSION['file_ablaufplan'] = $name;
                } else {
                    $_SESSION['status'] = 'Der Ablaufplan ist größer als die erlaubten 100 Megabyte';
                    header("Location: ../Seite1.php");
                }
            }
        }
    }
    if (isset($_POST['checkbox_drehbuch'])) {
        $checkbox_drehbuch = $_POST['checkbox_drehbuch'];
        $_SESSION['checkbox_drehbuch'] = $checkbox_drehbuch;
        if ($file_drehbuch != 'Dateiauswahl (Max 100 Megabyte') {
            $file_drehbuch = $_FILES['file_drehbuch'];
            if (!empty($file_drehbuch)) {
                if ($file_drehbuch["size"] < 100000000) {
                    $tmp_name = $file_drehbuch["tmp_name"];
                    // basename() kann Directory-Traversal-Angriffe verhindern;
                    // weitere Validierung/Bereinigung des Dateinamens kann angebracht sein
                    $name = basename($file_drehbuch["name"]);
                    $destination = "../storage/" . $name;
                    move_uploaded_file($tmp_name, $destination);
                    $_SESSION['file_drehbuch_destination'] = $destination;
                    $_SESSION['file_drehbuch'] = $name;
                } else {
                    $_SESSION['status'] = 'Das Drehbuch ist größer als die erlaubten 100 Megabyte';
                    header("Location: ../Seite1.php");
                }
            }
        }
    }
    if (isset($_POST['checkbox_nebelmaschine'])) {
        $checkbox_nebelmaschine = $_POST['checkbox_nebelmaschine'];
        $_SESSION['checkbox_nebelmaschine'] = $checkbox_nebelmaschine;
    }
    if (isset($_POST['checkbox_pult'])) {
        $checkbox_pult = $_POST['checkbox_pult'];
        $_SESSION['checkbox_pult'] = $checkbox_pult;
    }
    if (isset($_POST['checkbox_tafel'])) {
        $checkbox_tafel = $_POST['checkbox_tafel'];
        $_SESSION['checkbox_tafel'] = $checkbox_tafel;
    }
    if (isset($_POST['checkbox_fragen'])) {
        $checkbox_fragen = $_POST['checkbox_fragen'];
        $_SESSION['checkbox_fragen'] = $checkbox_fragen;
    }
    if ($checkbox_mikro == "on" || $checkbox_musik == "on" || $checkbox_instrumente == "on") {
        $tontechnik = true;
        $_SESSION['tontechnik'] = $tontechnik;
    } else {
        $tontechnik = false;
        $_SESSION['tontechnik'] = $tontechnik;
    }
    if ($checkbox_verfolger == "on") {
        $lichttechnik = true;
        $_SESSION['lichttechnik'] = $lichttechnik;
    } else {
        $lichttechnik = false;
        $_SESSION['lichttechnik'] = $lichttechnik;
    }
    if ($checkbox_livestream == "on" || $checkbox_aufzeichnen == "on") {
        $videotechnik = true;
        $_SESSION['videotechnik'] = $videotechnik;
    } else {
        $videotechnik = false;
        $_SESSION['videotechnik'] = $videotechnik;
    }
    if ($checkbox_beamer == "on" || $checkbox_ppp == "on" || $checkbox_ablaufplan == "on" || $checkbox_drehbuch == "on" || $checkbox_nebelmaschine == "on" || $checkbox_pult == "on" || $checkbox_tafel == "on" || !empty($checkbox_fragen)) {
        $allgemeines = true;
        $_SESSION['allgemeines'] = $allgemeines;
    } else {
        $allgemeines = false;
        $_SESSION['allgemeines'] = $allgemeines;
    }
    if ($tontechnik == true || $lichttechnik == true || $videotechnik == true || $allgemeines == true) {
        header("Location: " . $richtung);
    } elseif (isset($_POST['btn_back'])) {
        header("Location: " . $richtung);
    } else {
        $_SESSION['status'] = 'Bitte klicken Sie die benötigten Felder an';
        header("Location:../pages/" . $_SESSION['vertyp'] . ".php");
    }

    //  $checkbox_mikro,
    //  "</br>",
    //  $funkmikro, "</br>",
    //  $kabelmikro, "</br>",
    //  $anmerkung_mikro, "</br>",
    //  $checkbox_musik, "</br>",
    //  $link_playlist, "</br>",
    //  $file_musikfile, "</br>",
    //  $anmerkung_musik, "</br>",
    //  $checkbox_instrumente, "</br>",
    //  $list_instrumente, "</br>",
    //  $anmerkung_instrumente, "</br>",
    //  "</br>",
    //  $checkbox_verfolger, "</br>",
    //  //videote"</br>",
    //  $checkbox_livestream, "</br>",
    //  $plattform, "</br>",
    //  $titel_livestream, "</br>",
    //  $sichtbarkeit, "</br>",
    //  $checkbox_livechat, "</br>",
    //  $anmerkung_livestream, "</br>",
    //  $checkbox_aufzeichnen, "</br>",
    //  //Allgem"</br>",
    //  $checkbox_beamer, "</br>",
    //  $checkbox_ppp, "</br>",
    //  $file_ppp, "</br>",
    //  $checkbox_ablaufplan, "</br>",
    //  $file_ablaufplan, "</br>",
    //  $checkbox_drehbuch, "</br>",
    //  $file_drehbuch, "</br>",
    //  $checkbox_nebelmaschine, "</br>",
    //  $checkbox_pult, "</br>",
    //  $checkbox_tafel, "</br>",
    //  $checkbox_fragen;
} else {
    $_SESSION['status'] = 'Unbefugter eingriff';
    header("Location: ../Seite1.php");
}
