<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veranstaltungsplaner</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/Seite1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="img/icon/iconschwarz.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>


<body>
    <header>
        <h1>
            Kontakt Informationen
        </h1>
        <div class="container_header_line">
            <div class="container_header_line_short"></div>
        </div>
    </header>

    <section class="inhalt">
        <p class="inhalt_info">Zu allererst müssen wir wissen wer unser Ansprechpartner ist. Dazu erbitten wir Ihren Vor- und Nachnamen sowie ihre Email-Adresse für mögliche Nachfragen.</p>
    </section>
    <section class="inhalt">
        <?php
        session_start();

        if (isset($_SESSION['status'])) {
            echo '<p class ="hinweis" >' . $_SESSION['status'] . '</p>';
            unset($_SESSION['status']);
        }
        ?>
        <form action="includes/user_data.php" method="post">
            <div class="inhalt_container_textfeld">
                <label for="kl">Name</label>
                <input type="text" id="kl" name="Nachname" placeholder="z.B Hasenkamp" class="inhalt_conatiner_textfeld_input" value="<?php
                                                                                                                                        if (isset($_SESSION['Nachname'])) {
                                                                                                                                            echo $_SESSION['Nachname'];
                                                                                                                                        }
                                                                                                                                        ?>">
            </div>
            <div class="inhalt_container_textfeld">
                <label for="kl">Vorname</label>
                <input type="text" name="Vorname" id="kl" placeholder="z.B. Carl oder Yorck" class="inhalt_conatiner_textfeld_input" value="<?php
                                                                                                                                            if (isset($_SESSION['Vorname'])) {
                                                                                                                                                echo $_SESSION['Vorname'];
                                                                                                                                            }
                                                                                                                                            ?>">
            </div>
            <div class="inhalt_container_textfeld">
                <label for="kl">Email</label>
                <input type="email" id="kl" name="Email" placeholder="z.B. veranstaltungstechnik.kmp@gmail.com" class="inhalt_conatiner_textfeld_input" value="<?php
                                                                                                                                                                if (isset($_SESSION['Email'])) {
                                                                                                                                                                    echo $_SESSION['Email'];
                                                                                                                                                                }
                                                                                                                                                                ?>">
            </div>

            <div class="container_button">
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