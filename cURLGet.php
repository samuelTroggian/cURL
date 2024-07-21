<?php

/*
cURL - permite que você se conecto e se comunique com diferentes tipos de servidores usando diferentes tipos de protocolos https, ftp, gopher, telnet, dicti, file e ldap. libcurl também suporta certificados HTTPS, HTTP POST, HTTP PUT, upload via FTP  e muito mais.

Modo feio de entender: É o Ajax do PHP.


Pode fazer GET ou POST, mandar e receber dados diretamente a uma URL.
*/

//EXEMPLO cURL GET

//SEMPRE INICIALIZAR
$ch = curl_init();

//APONTAR A URL DESEJADA
curl_setopt($ch, CURLOPT_URL, "https://viacep.com.br/ws/01001000/json/");

//ATIVA O RETORNO COMO STRING DO SERVIDOR
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//EXECUTAR TODO O cURL
$retorno = curl_exec($ch);

//FECHAR O cURL
curl_close($ch);

//MOSTRAR O RETORNO VINDO
echo "<pre>$retorno</pre>";


$dados = json_decode($retorno, true);

echo $dados["ibge"];