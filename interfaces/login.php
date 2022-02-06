<!DOCTYPE html>
<html>

<body>
    <div class="text-box">
        <h1>
            STOCK
        </h1>
        <p>
            <center>
                <h2>LOGIN</h2>
                <div style="margin:20px 10px;"></div>
                <div class="easyui-panel" style="width:400px; padding: 50px 60px;">
                    <form action="models/loguear.php" method="POST">
                        <div style="margin-bottom:20px">
                            <input name="username" class="easyui-textbox" prompt="Usuario" iconWidth="28" style="width:100%;height:34px;padding:10px;">
                        </div>
                        <div style="margin-bottom:20px">
                            <input name="clave" class="easyui-passwordbox" prompt="Contraseña" iconWidth="28" style="width:100%;height:34px;padding:10px">
                        </div>
                        <center>
                            <button type="submit" style="width:100%;height:34px">Iniciar</button>
                        </center>
                    </form>
                </div>
            </center>
        </p>
    </div>

</body>

</html>