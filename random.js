var site = [
    "index.php?action=juego1",
    "index.php?action=juego2",
    "index.php?action=juego3"
];
function randomPage(){
     var randomNum = Math.floor(Math.random()*3);
    window.location.href = site[randomNum];     
}
