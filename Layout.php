<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veranstaltungsplaner</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="img/icon/iconschwarz.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>


<body>
    <header>
        <h1>
            H1: Überschriften
        </h1>
    </header>

    <section class="inhalt">
        <p class="inhalt_info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, id quisquam. Qui eaque dolorem facere? Tempora quisquam recusandae reprehenderit, doloribus placeat neque voluptatum voluptas sapiente in facere! Id, assumenda asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi vel, cupiditate qui facere voluptate corrupti, autem amet quas ea consectetur maxime voluptatum esse dolorem consequatur exercitationem adipisci ducimus soluta! Eius.</p>
        <div class="inhalt_container_textfeld">
            <label for="kl">Text für Textfeld</label>
            <input type="text" id="kl" class="inhalt_conatiner_textfeld_input">
        </div>
        <div class="inhalt_checkbox">
            <h2>Checkbox</h2>
            <div class="inhalt_checkbox_Flexcontainer">
                <label for="01" class="inhalt_checkbox_Flexcontainer_label1">Text für Checkbox</label>
                <input type="checkbox" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="01">
                <span class="checkmark"></span>
            </div>
            <div class="inhalt_checkbox_Flexcontainer">
                <label for="02" class="inhalt_checkbox_Flexcontainer_label1">Text für Checkbox</label>
                <input type="checkbox" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="02">
                <span class="checkmark"></span>
            </div>
            <div class="inhalt_checkbox_Flexcontainer">
                <label for="03" class="inhalt_checkbox_Flexcontainer_label1">Text für Checkbox</label>
                <input type="checkbox" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="03">
                <span class="checkmark"></span>
            </div>
            <div class="inhalt_checkbox_Flexcontainer">
                <label for="05" class="inhalt_checkbox_Flexcontainer_label1">Text für Checkbox</label>
                <input type="checkbox" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="04">
                <span class="checkmark"></span>
            </div>
            <div class="inhalt_checkbox_Flexcontainer">
                <label for="05" class="inhalt_checkbox_Flexcontainer_label1">Text für Checkbox</label>
                <input type="checkbox" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="05">
                <span class="checkmark"></span>
            </div>
            <div class="inhalt_checkbox_Flexcontainer">
                <label for="06" class="inhalt_checkbox_Flexcontainer_label1">Text für Checkbox</label>
                <input type="checkbox" class="inhalt_checkbox_Flexcontainer_checkbox_box1" id="06">
                <span class="checkmark"></span>
            </div>
        </div>
        <button class="button_weiter" style="vertical-align:middle"><span>Weiter </span></button>
        <button class="button_zurueck" style="vertical-align:middle"><span> Zurück</span></button>
        <button class="button_bestätigen" style="vertical-align:middle"><span> Bestätigen</span></button>
    </section>
    <footer>
        <p style="margin:5px; color:#D0CECE;">Gebrüder Hasenkamp</p>
        <div class="footer_container_icon">
            <img width="30px" height="30px" src="img/icon/iconschwarz.svg" alt="Icon">
        </div>

    </footer>
</body>


</html>