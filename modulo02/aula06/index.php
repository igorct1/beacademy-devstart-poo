<?php
ini_set('display_errors', 1);
require './vendor/autoload.php';
// use Classes\Config\Usuario as UsuarioConfig;
// $us1 = new Classes\Usuario();
// $us2 = new UsuarioConfig();

//fazer referencia ao namespace Dompdf
use Dompdf\Dompdf;
// instanciar e utilizar a classe dompdf
$dompdf = new Dompdf();

$html = '';

for ($n = 0; $n < 10; $n++) {
    $html.= 'ó o pente! <br>';
}
$dompdf->loadHtml(
    "$html"
);
//configurar o tamanho do papel e orientações
$dompdf->setPaper('A4', 'landscape');
// Renderizar o HTML como PDF
$dompdf->render();
$dompdf->stream();

// echo $us1->src();
// echo "<br>";
// echo $us2->src();
