var c = document.getElementById("Ortauswahl_canvas_bereich");
c.width = 716;
c.height = 337;
var ctx = c.getContext("2d");
var img = document.getElementById("mensa");
ctx.drawImage(img, 0, 0);
