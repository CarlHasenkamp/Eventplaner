<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veranstaltungsplaner</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/ion.calendar.js"></script>
    <script src="js/ion.calendar.min.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/Seite2.css">
    <link rel="stylesheet" href="css/ion.calendar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="img/icon/iconschwarz.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>


<body>
    <header>
        <h1>
            Veranstaltungstyp
        </h1>
    </header>
    <div class="container_header_line">
        <div class="container_header_line_short"></div>
    </div>
    <section class="inhalt">

        <p class="inhalt_info">Weiter gehts mit dem Datum und dem Veranstaltungstyp. Sollte noch kein Termin feststehen, wählen Sie bitte Ihren Wunschtermin und die Startzeit der Veranstaltung. Beim Veranstaltungstyp "Sonstiges" sind alle Funktionen aufgelistet. Bei den anderen Typen sind nur die notwenigen Funktionen auswählbar.</p>
        <div class="myCalendar" id="myCalendar-1">
            <script>
                $("#myCalendar-1").ionCalendar({
                    lang: "de", // language
                    sundayFirst: false, // first week day
                    years: "2010-2030", // years diapason
                    format: "DD.MM.YYYY", // date format
                    onClick: function(date) { // click on day returns date
                        $.post("includes/calendar.php", {
                                day: date

                            },
                            function(data, status) {

                            });
                    }
                });
                $("#myDatePicker-1").ionDatePicker();
            </script>
        </div>
        <form action="includes/time_typ.php" method="post">
            <div class="inhalt_zeit">
                <label class="inhalt_zeit_label" for="05">Startzeit:</label>
                <input type="time" name="Uhr" value="<?php session_start();
                                                        if (isset($_SESSION['Uhr'])) {

                                                            echo $_SESSION['Uhr'];
                                                        } ?>" class="clock" id="05">
            </div>
            <div class="inhalt_veranstaltunhstyp">
                <label for="typ" class="inhalt_veranstaltunhstyp_label">Veranstaltungstyp:</label>
                <select name="vertyp" id="typ">
                    <option value="Präsentation" <?php
                                                    if (isset($_SESSION['vertyp'])) {
                                                        if ($_SESSION['vertyp'] == 'Präsentation') {
                                                            echo 'selected';
                                                        }
                                                    } ?>>Präsentation</option>
                    <option value="Musik" <?php
                                            if (isset($_SESSION['vertyp'])) {
                                                if ($_SESSION['vertyp'] == 'Musik') {
                                                    echo 'selected';
                                                }
                                            } ?>>Musik</option>
                    <option value="Theater" <?php
                                            if (isset($_SESSION['vertyp'])) {
                                                if ($_SESSION['vertyp'] == 'Theater') {
                                                    echo 'selected';
                                                }
                                            } ?>>Theater</option>
                    <option value="Schulball" <?php
                                                if (isset($_SESSION['vertyp'])) {
                                                    if ($_SESSION['vertyp'] == 'Schulball') {
                                                        echo 'selected';
                                                    }
                                                } ?>>Schulball</option>
                    <option value="Wahl" <?php
                                            if (isset($_SESSION['vertyp'])) {
                                                if ($_SESSION['vertyp'] == 'Wahl') {
                                                    echo 'selected';
                                                }
                                            } ?>>Schülersprecher Wahl</option>
                    <option value="Gottesdienst" <?php
                                                    if (isset($_SESSION['vertyp'])) {
                                                        if ($_SESSION['vertyp'] == 'Gottesdienst') {
                                                            echo 'selected';
                                                        }
                                                    } ?>>Gottedienst</option>
                    <option value="Sonstiges" <?php
                                                if (isset($_SESSION['vertyp'])) {
                                                    if ($_SESSION['vertyp'] == 'Sonstiges') {
                                                        echo 'selected';
                                                    }
                                                } ?>>Sonstiges</option>
                </select>
            </div>
            <div>
                <button class="button_zurueck" name="btn_back" type="submit" style="vertical-align:middle"><span>Zurück</span></button>
                <button class="button_weiter" name="btn_for" type="submit" style="vertical-align:middle"><span>Weiter </span></button>
            </div>
        </form>
    </section>
    <footer>
        <p style="margin:5px; color:#D0CECE;">Gebrüder Hasenkamp</p>
        <div class="footer_container_icon">
            <img width="30px" height="30px" src="img/icon/iconschwarz.svg" alt="Icon">
        </div>

    </footer>
</body>


</html>