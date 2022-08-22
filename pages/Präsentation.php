<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veranstaltungsplaner</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/pages_css/Sonstiges.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="../img/icon/iconschwarz.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>


<body>
    <header>
        <h1>
            Präsentation
        </h1>
        <div class="container_header_line">
            <div class="container_header_line_short"></div>
        </div>
    </header>

    <section class="inhalt">
        <p class="inhalt_info">Hier geben wir Ihnen die Möglichkeit die Veranstaltung mit unserer Technik bestmöglich gemäß Ihrer Vorstellung zu konfigurieren. Füllen Sie dafür die unten aufgeführten Felder aus, sofern Sie gebrauch von der Option machen wollen. Wenn diese Option für Ihre Event nicht geeignet ist lassen Sie es einfach unangetastet.</p>
        <?php
        session_start();

        if (isset($_SESSION['status'])) {
            echo '<p class ="hinweis" >' . $_SESSION['status'] . '</p>';
            unset($_SESSION['status']);
        }
        ?>
        <form action="../includes/preload.php" method="post" enctype='multipart/form-data'>
            <div class="tontechnik">
                <h2>Tontechnik</h2>
                <div class="Mikro">
                    <div class="inhalt_checkbox_Flexcontainer">
                        <label for="1" class="inhalt_checkbox_Flexcontainer_label1_checkbox">Mikrofon</label>
                        <input onclick="moreoptions(1)" type="checkbox" name="checkbox_mikro" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="1" <?php
                                                                                                                                                            if (isset($_SESSION['checkbox_mikro'])) {
                                                                                                                                                                if ($_SESSION['checkbox_mikro'] == "on") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                            ?>>
                        <div id="1A" class="container_moreoptions">
                            <div class="inhalt_checkbox_Flexcontainer_label2"></div>
                            <label for="1B" class="inhalt_checkbox_Flexcontainer_label1">Funk Mikrofone:</label>

                            <div class="container_moreoptions_flex">
                                <input class="input_num" type="number" name="funkmikro" id="1B" min="0" max="2" value="<?php

                                                                                                                        if (isset($_SESSION['funkmikro'])) {
                                                                                                                            echo $_SESSION['funkmikro'];
                                                                                                                        }
                                                                                                                        ?>"><span></span>
                                <label for="1B" class="imput_num_label">/2</label>
                            </div>
                            <label for="2B" class="inhalt_checkbox_Flexcontainer_label1">Kabel Mikrofone:</label>
                            <div class="container_moreoptions_flex">
                                <input class="input_num" type="number" name="kabelmikro" id="2B" min="0" max="8" value="<?php

                                                                                                                        if (isset($_SESSION['kabelmikro'])) {
                                                                                                                            echo $_SESSION['kabelmikro'];
                                                                                                                        }
                                                                                                                        ?>"><span></span>
                                <label for="2B" class="imput_num_label">/8</label>
                            </div>
                            <label for="3B" class="inhalt_checkbox_Flexcontainer_label1">Anmerkung</label>
                            <div class="container_moreoptions_flex">
                                <input style="width:70%;" class="input_num" type="text" name="anmerkung_mikro" id="3B" value="<?php

                                                                                                                                if (isset($_SESSION['anmerkung_mikro'])) {
                                                                                                                                    echo $_SESSION['anmerkung_mikro'];
                                                                                                                                }
                                                                                                                                ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="videotechnik">
                <h2>Videotechnik</h2>
                <div class="Vid">
                    <div class="inhalt_checkbox_Flexcontainer">
                        <label for="4" class="inhalt_checkbox_Flexcontainer_label1_checkbox">Live-Stream</label>
                        <input onclick="moreoptions(4)" type="checkbox" name="checkbox_livestream" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="4" <?php


                                                                                                                                                                if (isset($_SESSION['checkbox_livestream'])) {
                                                                                                                                                                    if ($_SESSION['checkbox_livestream'] == "on") {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    }
                                                                                                                                                                }
                                                                                                                                                                ?>>

                        <div id="4A" class="container_moreoptions">
                            <div class="inhalt_checkbox_Flexcontainer_label2"></div>
                            <label for="3B" class="inhalt_checkbox_Flexcontainer_label1">Plattform:</label>
                            <div class="container_moreoptions_flex">
                                <input placeholder="z.B. Youtube, Webvewer, Zoom..." class="input_num" type="text" name="plattform" id="3B" value="<?php

                                                                                                                                                    if (isset($_SESSION['plattform'])) {
                                                                                                                                                        echo $_SESSION['plattform'];
                                                                                                                                                    }
                                                                                                                                                    ?>">
                            </div>
                            <label for="4B" class="inhalt_checkbox_Flexcontainer_label1">Titel des Livestreams</label>
                            <div class="container_moreoptions_flex">
                                <input style="width:70%;" placeholder="z.B. Vortrag über den Einfluss der Medien auf Jugendliche (01.01.2030 19:00)" class="input_num" type="text" name="titel_livestream" id="4B" value="<?php

                                                                                                                                                                                                                            if (isset($_SESSION['titel_livestream'])) {
                                                                                                                                                                                                                                echo $_SESSION['titel_livestream'];
                                                                                                                                                                                                                            }
                                                                                                                                                                                                                            ?>">
                            </div>

                            <label for="2B" class="inhalt_checkbox_Flexcontainer_label1">Sichtbarkeit (Außschlißlich für Youtube auf öffentlich einstellbar)</label>
                            <div class="container_moreoptions_flex">
                                <select class="input_num" name="sichtbarkeit" id="typ">
                                    <option value="Öffentlich" <?php
                                                                if (isset($_SESSION['sichtbarkeit'])) {
                                                                    if ($_SESSION['sichtbarkeit'] == 'Öffentlich') {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>>Öffentlich</option>
                                    <option value="Privat" <?php
                                                            if (isset($_SESSION['sichtbarkeit'])) {
                                                                if ($_SESSION['sichtbarkeit'] == 'Privat') {
                                                                    echo 'selected';
                                                                }
                                                            } ?>>Privat (Nur mit bestimmten Link aufrufbar)</option>
                                </select>

                            </div>
                            <div class="flex_row_nowrap">
                                <label for="live-chat" class="inhalt_checkbox_Flexcontainer_label1_checkbox">Live-Chat <a href="http://localhost/veranstaltungstechnik/pages/help.php#:~:text=Was%20ist%20mit%20Live%2DChat%20gemeint%3F" class="link" target="_blank">Was ist damit gemeint?</a></label>
                                <input type="checkbox" class="inhalt_checkbox_Flexcontainer_checkbox_box1" name="checkbox_livechat" id="live-chat" <?php
                                                                                                                                                    if (isset($_SESSION['checkbox_livechat'])) {
                                                                                                                                                        if ($_SESSION['checkbox_livechat'] == "on") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        }
                                                                                                                                                    }
                                                                                                                                                    ?>>
                            </div>

                            <label for="3B" class="inhalt_checkbox_Flexcontainer_label1">Anmerkung</label>
                            <div class="container_moreoptions_flex">
                                <input style="width:70%;" class="input_num" type="text" name="anmerkung_livestream" id="3B" value="<?php

                                                                                                                                    if (isset($_SESSION['anmerkung_livestream'])) {
                                                                                                                                        echo $_SESSION['anmerkung_livestream'];
                                                                                                                                    }
                                                                                                                                    ?>">
                            </div>
                        </div>

                    </div>
                    <div class="inhalt_checkbox_Flexcontainer">
                        <label for="5a" class="inhalt_checkbox_Flexcontainer_label1_checkbox">Aufzeichnen</label>
                        <input type="checkbox" name="checkbox_aufzeichnen" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="5a" <?php

                                                                                                                                        if (isset($_SESSION['checkbox_aufzeichnen'])) {
                                                                                                                                            if ($_SESSION['checkbox_aufzeichnen'] == "on") {
                                                                                                                                                echo 'checked';
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                        ?>>
                    </div>


                </div>
            </div>
            <div class="allgemeines">
                <h2>Allgemeines</h2>
                <div class="Mikro">
                    <div class="inhalt_checkbox_Flexcontainer">
                        <label for="6a" class="inhalt_checkbox_Flexcontainer_label1_checkbox">Beamer</label>
                        <input type="checkbox" name="checkbox_beamer" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="6a" <?php

                                                                                                                                    if (isset($_SESSION['checkbox_beamer'])) {
                                                                                                                                        if ($_SESSION['checkbox_beamer'] == "on") {
                                                                                                                                            echo 'checked';
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                    ?>>
                    </div>
                    <div class="inhalt_checkbox_Flexcontainer">
                        <label for="5" class="inhalt_checkbox_Flexcontainer_label1_checkbox">Powerpoint-Präsentation (andere Dateiformate werden unterstützt)</label>
                        <input onclick="moreoptions(5)" name="checkbox_ppp" type="checkbox" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="5" <?php
                                                                                                                                                        if (isset($_SESSION['checkbox_ppp'])) {
                                                                                                                                                            if ($_SESSION['checkbox_ppp'] == "on") {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            }
                                                                                                                                                        }
                                                                                                                                                        ?>>
                        <div id="5A" class="container_moreoptions">
                            <input onchange="upload('file2')" class="file" type="file" name="file_ppp" id="file2" value="">
                            <label class="input_file_data" id="output_file2" for="file2"><?php

                                                                                            if (isset($_SESSION['file_ppp']) && !empty($_SESSION['file_ppp'])) {
                                                                                                echo $_SESSION['file_ppp'];
                                                                                            } else {
                                                                                                echo 'Dateiauswahl (Max 100 Megabyte)';
                                                                                            }
                                                                                            ?></label>
                        </div>
                    </div>
                    <div class="inhalt_checkbox_Flexcontainer">
                        <label for="6" class="inhalt_checkbox_Flexcontainer_label1_checkbox">Ablaufplan</label>
                        <input onclick="moreoptions(6)" name="checkbox_ablaufplan" type="checkbox" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="6" <?php

                                                                                                                                                                if (isset($_SESSION['checkbox_ablaufplan'])) {
                                                                                                                                                                    if ($_SESSION['checkbox_ablaufplan'] == "on") {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    }
                                                                                                                                                                }
                                                                                                                                                                ?>>
                        <div id="6A" class="container_moreoptions">
                            <input onchange="upload('file3')" class="file" type="file" name="file_ablaufplan" id="file3" value="<?php
                                                                                                                                if (isset($_SESSION['file_ablaufplan']) && !empty($_SESSION['file_ablaufplan'])) {
                                                                                                                                    echo $_SESSION['file_ablaufplan'];
                                                                                                                                } ?>">
                            <label class="input_file_data" id="output_file3" for="file3"><?php


                                                                                            if (isset($_SESSION['file_ablaufplan']) && !empty($_SESSION['file_musikfile'])) {
                                                                                                echo $_SESSION['file_ablaufplan'];
                                                                                            } else {
                                                                                                echo 'Dateiauswahl (Max 100 Megabyte)';
                                                                                            }
                                                                                            ?></label>
                        </div>
                    </div>
                    <div class="inhalt_checkbox_Flexcontainer">
                        <label for="9" class="inhalt_checkbox_Flexcontainer_label1_checkbox">Redner-Pult</label>
                        <input type="checkbox" name="checkbox_pult" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="9" <?php

                                                                                                                                if (isset($_SESSION['checkbox_pult'])) {
                                                                                                                                    if ($_SESSION['checkbox_pult'] == "on") {
                                                                                                                                        echo 'checked';
                                                                                                                                    }
                                                                                                                                }
                                                                                                                                ?>>
                    </div>
                    <div class="inhalt_checkbox_Flexcontainer">
                        <label for="10" class="inhalt_checkbox_Flexcontainer_label1_checkbox">Tafel/Whiteboard</label>
                        <input type="checkbox" name="checkbox_tafel" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="10" <?php

                                                                                                                                    if (isset($_SESSION['checkbox_tafel'])) {
                                                                                                                                        if ($_SESSION['checkbox_tafel'] == "on") {
                                                                                                                                            echo 'checked';
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                    ?>>
                    </div>
                    <div class="inhalt_checkbox_Flexcontainer" style=" margin:0;margin-top:10px; ">
                        <label class="inhalt_checkbox_Flexcontainer_label1" for="w3review">Platz für Fragen:</label>

                        <textarea class="input_num" style="width:100%;  background-color: rgb(238, 238, 238);" id="w3review" name="checkbox_fragen" rows="4" cols="50"><?php

                                                                                                                                                                        if (isset($_SESSION['checkbox_fragen'])) {
                                                                                                                                                                            echo $_SESSION['checkbox_fragen'];
                                                                                                                                                                        }
                                                                                                                                                                        ?></textarea>
                    </div>



                </div>
            </div>
            <div class="container_button">
                <button class="button_zurueck" name="btn_back" type="submit" style="vertical-align:middle"><span>Zurück</span></button>
                <button class="button_weiter" name="btn_for" type="submit" style="vertical-align:middle"><span>Weiter</span></button>

            </div>
        </form>
    </section>
    <footer>
        <p style="margin:5px; color:#D0CECE;">Gebrüder Hasenkamp</p>
        <div class="footer_container_icon">
            <img width="30px" height="30px" src="../img/icon/iconschwarz.svg" alt="Icon">
        </div>

    </footer>
    <script>
        $(document).ready(function() {
            for (let i = 1; i < 8; i++) {
                var cb = document.getElementById(i);
                if (cb.checked == true) {
                    $('#' + i + 'A').slideDown();
                }
            }
        });

        function moreoptions(x) {

            const cb = document.getElementById(x);

            if (cb.checked == true) {
                $('#' + x + 'A').slideDown();
            } else {
                $('#' + x + 'A').slideUp();
            }
        }
    </script>
    <script>
        function upload(x) {
            console.log('output_' + x)
            const files = document.querySelector('#' + x);

            // Get the selected file
            const [file] = event.target.files;
            // Get the file name and size
            const {
                name: fileName,
                size
            } = file;
            // Convert size in bytes to kilo bytes
            const fileSize = (size / 1000).toFixed(2);
            // Set the text content
            const fileNameAndSize = `${fileName} - ${fileSize}KB`;
            console.log('Dateiname:' + fileNameAndSize)
            document.querySelector('#output_' + x).innerHTML = fileNameAndSize;
            document.querySelector('#output_' + x).style.backgroundColor = "#70AD47";

        }
    </script>
</body>


</html>