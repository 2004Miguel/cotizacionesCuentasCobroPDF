<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>datos para hacer la cuenta de cobro</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <form action="cuentaCobroPDF.php" method="POST">
        <label for="cuenta-cobro">Número de Cuenta de Cobro:</label>
        <input type="text" id="cuenta-cobro" name="cuenta_cobro" >

        <label for="cliente">Cliente:</label>
        <input type="text" id="cliente" name="cliente" >

        <label for="debe-a">Debe a:</label>
        <input type="text" id="debe-a" name="debe_a" >

        <label for="suma">Suma de:</label>
        <input type="number" id="suma" name="suma" step="0.01" >

        <label for="concepto">Por concepto de:</label>
        <textarea type="text" id="concepto" name="concepto" ></textarea>

        <input type="submit" value="Enviar">
</form>

    
</body>
</html>