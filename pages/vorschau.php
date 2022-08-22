<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veranstaltungsplaner</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/pages_css/Vorschau.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="../img/icon/iconschwarz.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>


<body>
    <header>
        <h1>
            Vorschau
        </h1>
        <div class="container_header_line">
            <div class="container_header_line_short"></div>
        </div>
    </header>

    <section class="inhalt">
        <p class="inhalt_info"></p>
        <?php

        //  echo nl2br(print_r($_SESSION, true));

        if (isset($_SESSION['status'])) {
            echo '<p class ="hinweis" >' . $_SESSION['status'] .  '</p>';
            unset($_SESSION['status']);
        }
        ?>
        <div class="inhalt_Vorschau">
            <h2>Information</h2>
            <div class="inhalt_vorschau_container">
                <div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Name</p>
                    <p><?php
                        echo $_SESSION['Nachname'];
                        ?></p>
                </div>
                <div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Vorname</p>
                    <p><?php
                        echo $_SESSION['Vorname'];
                        ?></p>
                    </p>
                </div>
                <div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">E-Mail</p>
                    <p><?php
                        echo $_SESSION['Email'];
                        ?></p>
                    </p>
                </div>
                <div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Datum und Uhrzeit</p>
                    <p><?php
                        echo $_SESSION['Datum'] . ' ' . $_SESSION['Uhr'];
                        ?></p>
                </div>
                <div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Veranstalungstyp</p>
                    <p><?php

                        if (isset($_SESSION['newvertyp']) && !empty($_SESSION['newvertyp'])) {
                            echo $_SESSION['newvertyp'];
                        } elseif (isset($_SESSION['vertyp'])) {
                            echo $_SESSION['vertyp'];
                        }
                        ?></p>
                </div>
            </div>
        </div>
        <div class="inhalt_Vorschau">
            <h2>Technik</h2>
            <?php
            if ($_SESSION['tontechnik'] == true) {
                echo '<h3>Tontechnik</h3>
                <div class="inhalt_vorschau_container">';
                if ($_SESSION["checkbox_mikro"] == "on") {
                    echo '            <div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Mikrofone</p>
                    <p>Ja</p>
                </div>';
                }
                if ($_SESSION["funkmikro"]) {
                    echo '
                <div class="inhalt_Vorschau_Flexcontainer_h2">
                <p class="inhalt_vorschau_Flexcontainer_index">Funk Mikrofone</p>
                <p>' . $_SESSION["funkmikro"] . '</p>
            </div>
                ';
                }
                if ($_SESSION["kabelmikro"]) {
                    echo '
                <div class="inhalt_Vorschau_Flexcontainer_h2">
                <p class="inhalt_vorschau_Flexcontainer_index">Kabel Mikrofone</p>
                <p>' . $_SESSION["kabelmikro"] . '</p>
            </div>
                ';
                }
                if (!empty($_SESSION["anmerkung_mikro"])) {
                    echo '
                    <div class="inhalt_Vorschau_Flexcontainer_h2_teilung">
                <p class="inhalt_vorschau_Flexcontainer_index">Anmerkung</p>
                <p>' . $_SESSION["anmerkung_mikro"] . '</p>
            </div>
                ';
                }
                //MUSIK
                if ($_SESSION["checkbox_musik"] == "on") {
                    echo '            <div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Musik</p>
                    <p>Ja</p>
                </div>';
                }
                if (!empty($_SESSION["link_playlist"])) {
                    echo '
                    <div class="inhalt_Vorschau_Flexcontainer_h2">
                <p class="inhalt_vorschau_Flexcontainer_index">Playlist Link</p>
                <a>' . $_SESSION["link_playlist"] . '</a>
            </div>
                ';
                }
                if (!empty($_SESSION["file_musikfile"])) {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h2">
                    <p class="inhalt_vorschau_Flexcontainer_index">Musikdatei</p>
                    <p>Ja ';
                    if ($_SESSION["file_musikfile_destination"] != "../storage/") {
                        echo '<a class="link"href="' . $_SESSION["file_musikfile_destination"] . '" download>Download (' . $_SESSION["file_musikfile"] . ')</a>';
                    }

                    echo '</p>
                </div>';
                }



                if (!empty($_SESSION["anmerkung_musik"])) {
                    echo '
                    
            <div class="inhalt_Vorschau_Flexcontainer_h2_teilung">
            <p class="inhalt_vorschau_Flexcontainer_index">Anmerkung</p>
                <p>' . $_SESSION["anmerkung_musik"] . '</p>
            </div>
                ';
                }
                if ($_SESSION["checkbox_instrumente"] == "on") {
                    echo '            <div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Instrumente</p>
                    <p>Ja</p>
                </div>';
                }
                if (!empty($_SESSION["list_instrumente"])) {
                    echo '
                    
            <div class="inhalt_Vorschau_Flexcontainer_h2">
            <p class="inhalt_vorschau_Flexcontainer_index">Welche Instrumente</p>
                <p>' . $_SESSION["list_instrumente"] . '</p>
            </div>
                ';
                }
                if (!empty($_SESSION["anmerkung_instrumente"])) {
                    echo '
                    
            <div class="inhalt_Vorschau_Flexcontainer_h2_teilung">
            <p class="inhalt_vorschau_Flexcontainer_index">Anmerkung</p>
                <p>' . $_SESSION["anmerkung_instrumente"] . '</p>
            </div>
                ';
                }
                echo '</div>';
            }

            if ($_SESSION['lichttechnik'] == true) {
                echo '<h3>Lichttechnik</h3>
                <div class="inhalt_vorschau_container">';

                if ($_SESSION["checkbox_verfolger"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Spot-Light (Verfolger)</p>
                    <p>Ja</p>
                </div>';
                }
                echo '</div>';
            }
            if ($_SESSION['videotechnik'] == true) {
                echo '<h3>Videotechnik</h3>
                <div class="inhalt_vorschau_container">';

                if ($_SESSION["checkbox_livestream"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Live-Stream</p>
                    <p>Ja</p>
                </div>';
                }

                if (!empty($_SESSION["plattform"])) {
                    echo '
                
        <div class="inhalt_Vorschau_Flexcontainer_h2">
        <p class="inhalt_vorschau_Flexcontainer_index">Plattform</p>
            <p>' . $_SESSION["plattform"] . '</p>
        </div>
            ';
                }
                if (!empty($_SESSION["titel_livestream"])) {
                    echo '
                
        <div class="inhalt_Vorschau_Flexcontainer_h2">
        <p class="inhalt_vorschau_Flexcontainer_index">Titel des Live-Streams</p>
            <p>' . $_SESSION["titel_livestream"] . '</p>
        </div>
            ';
                }
                if (!empty($_SESSION["sichtbarkeit"])) {
                    echo '
                
        <div class="inhalt_Vorschau_Flexcontainer_h2">
        <p class="inhalt_vorschau_Flexcontainer_index">Sichtbarkeit</p>
            <p>' . $_SESSION["sichtbarkeit"] . '</p>
        </div>
            ';
                }
                if ($_SESSION["checkbox_livechat"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h2">
                <p class="inhalt_vorschau_Flexcontainer_index">Live-Chat</p>
                <p>Ja</p>
            </div>';
                }
                if (!empty($_SESSION["anmerkung_livestream"])) {
                    echo '
                    
            <div class="inhalt_Vorschau_Flexcontainer_h2_teilung">
            <p class="inhalt_vorschau_Flexcontainer_index">Anmerkung</p>
                <p>' . $_SESSION["anmerkung_livestream"] . '</p>
            </div>
                ';
                }
                echo '</div>';
            }
            if ($_SESSION['allgemeines'] == true) {
                echo '<h3>Allgemeines</h3>
                <div class="inhalt_vorschau_container">';
                if ($_SESSION["checkbox_beamer"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Beamer</p>
                    <p>Ja</p>
                </div>';
                }
                if ($_SESSION["checkbox_ppp"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Powerpoint-Präsentation</p>
                    <p>Ja ';
                    if ($_SESSION["file_ppp_destination"] != "../storage/") {
                        echo '<a class="link"href="' . $_SESSION["file_ppp_destination"] . '" download>Download (' . $_SESSION["file_ppp"] . ')</a>';
                    }

                    echo '</p>
                </div>';
                }
                if ($_SESSION["checkbox_ablaufplan"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Ablaufplan</p>
                    <p>Ja ';
                    if ($_SESSION["file_ablaufplan_destination"] != "../storage/") {
                        echo '<a class="link"href="' . $_SESSION["file_ablaufplan_destination"] . '" download>Download (' . $_SESSION["file_ablaufplan"] . ')</a>';
                    }

                    echo '</p>
                </div>';
                }
                if ($_SESSION["checkbox_drehbuch"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Drehbuch</p>
                    <p>Ja ';
                    if ($_SESSION["file_drehbuch_destination"] != "../storage/") {
                        echo '<a class="link"href="' . $_SESSION["file_drehbuch_destination"] . '" download>Download (' . $_SESSION["file_drehbuch"] . ')</a>';
                    }

                    echo '</p>
                </div>';
                }
                if ($_SESSION["checkbox_nebelmaschine"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Nebelmaschine</p>
                    <p>Ja</p>
                </div>';
                }
                if ($_SESSION["checkbox_pult"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Pult</p>
                    <p>Ja</p>
                </div>';
                }
                if ($_SESSION["checkbox_tafel"] == "on") {
                    echo '<div class="inhalt_Vorschau_Flexcontainer_h1">
                    <p class="inhalt_vorschau_Flexcontainer_index">Tafel</p>
                    <p>Ja</p>
                </div>';
                }
                if (!empty($_SESSION["checkbox_fragen"])) {
                    echo '
                    
            <div class="inhalt_Vorschau_Flexcontainer_h1">
            <p class="inhalt_vorschau_Flexcontainer_index">Fragen</p>
                <p>' . $_SESSION["checkbox_fragen"] . '</p>
            </div>
                ';
                }
                echo '</div>';
            }
            ?>




        </div>
        <form action="../includes/send_data.php" method="post">
            <button class="button_zurueck" onclick="warnung()" name="btn_back" type="submit" style="vertical-align:middle"><span>Zurück</span></button>
            <button class="button_weiter" name="btn_for" type="submit" style="vertical-align:middle"><span>Absenden</span></button>
        </form>
    </section>
    <footer>
        <p style="margin:5px; color:#D0CECE;">Gebrüder Hasenkamp</p>
        <div class="footer_container_icon">
            <img width="30px" height="30px" src="../img/icon/iconschwarz.svg" alt="Icon">
        </div>

    </footer>
    <script>
        function warnung() {
            alert('Wenn Sie Dateien hochgeladen haben, bitten wir Sie aus Sicherheitsgründen diese später erneut hochzuladen, wenn weiterhin Gebrauch davon genommen werden soll. Vielen Dank')
        }
    </script>
</body>


</html>