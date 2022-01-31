<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        
        <div class="tetriscont">
        <hl class="tetrisTittle">TETRIS</hl>
        <audio id="clearsound" src="ganaste_un_punto.wav" preload="auto"></audio>
        <canvas class="tetris" width='300' height='600'></canvas>
        <div class="button1">
            <button type="button" onclick="playButtonClicked();"><span></span>Play</button>
        </div>
        <script src='jsTe/tetris.js'></script>
        <script src='jsTe/controller.js'></script>
        <script src='jsTe/render.js'></script>
        </div>
    </body>
</html>
