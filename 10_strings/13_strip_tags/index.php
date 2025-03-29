<?php

$textoHtml = "<p>Testando paragrafo.</p><div>Uma div</div><p>Outro paragrafo</p>";

echo $textoHtml;

$salvarTextoBanco = strip_tags($textoHtml);
echo $salvarTextoBanco;

?>