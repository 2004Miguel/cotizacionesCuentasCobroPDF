<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        h1{
            text-decoration: underline;
        }

        main{
            width: 400px;
            margin: 0 auto;
        }

        p{
            font-size: 25px;
        }

        footer{
            margin-top: 100px;
        }

        .contenedor{
            margin-top: 60px;
            
        }
    </style>
</head>
<body>
    <main>
        <h1>CUENTA COBRO N°<?php echo $_POST['cuenta_cobro'] ?></h1>
        <p><?php echo date('d/m/Y') ?></p>
        <p><?php echo $_POST['cliente'] ?></p>
        <h1 class="contenedor">DEBE A:</h1>
        <p><?php echo $_POST['debe_a'] ?></p>
        <h1>LA SUMA DE: </h1>
        <p><?php echo $_POST['suma'] ?></p>
        <h1 class="contenedor">POR CONCEPTO: </h1>
        <p><?php echo $_POST['concepto'] ?></p>
    </main>

    <footer>
        <p><b>Atentamente, </b></p>
        <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/cotizacionesCuentasCobro/datosCobro.png" alt="correo electrónico y número de cuenta bancaria">
    </footer>

</body>
</html>
<?php
$html=ob_get_clean();

require 'vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('letter');

$dompdf->render();
$dompdf->stream("archivo.pdf", array("Attachment" => false));
?>

