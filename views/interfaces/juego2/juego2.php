<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"
    />
  </head>
  <body>
      <div class="juegos">
        <h1>JUEGO DE LA CULEBRITA</h1>
        <div id="puntos">PUNTOS: 0</div>

        <div id="bannerRotarTelefono" class="esconder">

          <button id="botonCerrarBanner">OK</button>

        </div>
        <div id="contenedorJuego">

          <div id="contenedorNintendo">
            <div id="juegoOverlay">
              <img id="nintendo" src="nintendo.png" />
              <canvas id="juegoCanvas" width="600" height="600"></canvas>
            </div>
          </div>
        </div>
        <script src="culebrita.js"></script>
      </div>
    
  </body>
</html>
