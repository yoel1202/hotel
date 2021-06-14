<?php

//require_once('decode_64.php');
function cpeEnvio($ruc, $usuario_sol, $pass_sol, $ruta_archivo, $ruta_archivo_cdr, $archivo, $ruta_ws) {
    //=================ZIPEAR ================
    $zip = new ZipArchive();
    $filenameXMLCPE = $ruta_archivo . '.ZIP';

    if ($zip->open($filenameXMLCPE, ZIPARCHIVE::CREATE) === true) {
        $zip->addFile($ruta_archivo . '.XML', $archivo . '.XML'); //ORIGEN, DESTINO
        $zip->close();
    }

    //===================ENVIO FACTURACION=====================
    $soapUrl = $ruta_ws; //"https://e-beta.sunat.gob.pe:443/ol-ti-itcpfegem-beta/billService"; // asmx URL of WSDL
    $soapUser = "";  //  username
    $soapPassword = ""; // password
    // xml post structure
    $xml_post_string = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" 
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="http://service.sunat.gob.pe" 
    xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
    <soapenv:Header>
        <wsse:Security>
            <wsse:UsernameToken>
                <wsse:Username>' . $ruc . $usuario_sol . '</wsse:Username>
                <wsse:Password>' . $pass_sol . '</wsse:Password>
            </wsse:UsernameToken>
        </wsse:Security>
    </soapenv:Header>
    <soapenv:Body>
        <ser:sendBill>
            <fileName>' . $archivo . '.ZIP</fileName>
            <contentFile>' . base64_encode(file_get_contents($ruta_archivo . '.ZIP')) . '</contentFile>
        </ser:sendBill>
    </soapenv:Body>
    </soapenv:Envelope>';

    $headers = array(
        "Content-type: text/xml;charset=\"utf-8\"",
        "Accept: text/xml",
        "Cache-Control: no-cache",
        "Pragma: no-cache",
        "SOAPAction: ",
        "Content-length: " . strlen($xml_post_string),
    ); //SOAPAction: your op URL

    $url = $soapUrl;

    // PHP cURL  for https connection with auth
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // converting
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($httpcode == 200) {//======LA PAGINA SI RESPONDE
        //echo $httpcode.'----'.$response;
        //convertimos de base 64 a archivo fisico
        $doc = new DOMDocument();
        $doc->loadXML($response);



        //===================VERIFICAMOS SI HA ENVIADO CORRECTAMENTE EL COMPROBANTE=====================
        if (isset($doc->getElementsByTagName('applicationResponse')->item(0)->nodeValue)) {
            $xmlCDR = $doc->getElementsByTagName('applicationResponse')->item(0)->nodeValue;
            file_put_contents($ruta_archivo_cdr . 'R-' . $archivo . '.ZIP', base64_decode($xmlCDR));

            //extraemos archivo zip a xml
            $zip = new ZipArchive;
            if ($zip->open($ruta_archivo_cdr . 'R-' . $archivo . '.ZIP') === TRUE) {
                $zip->extractTo($ruta_archivo_cdr, 'R-' . $archivo . '.XML');
                $zip->close();
            }

            //eliminamos los archivos Zipeados
            unlink($ruta_archivo . '.ZIP');
            unlink($ruta_archivo_cdr . 'R-' . $archivo . '.ZIP');

            //=============hash CDR=================
            $doc_cdr = new DOMDocument();
            $doc_cdr->load(dirname(__FILE__) . '/' . $ruta_archivo_cdr . 'R-' . $archivo . '.XML');

            $mensaje['cod_sunat'] = $doc_cdr->getElementsByTagName('ResponseCode')->item(0)->nodeValue;
            $mensaje['msj_sunat'] = $doc_cdr->getElementsByTagName('Description')->item(0)->nodeValue;
            $mensaje['hash_cdr'] = $doc_cdr->getElementsByTagName('DigestValue')->item(0)->nodeValue;
        } else {
            $mensaje['cod_sunat'] = $doc->getElementsByTagName('faultcode')->item(0)->nodeValue;
            $mensaje['msj_sunat'] = $doc->getElementsByTagName('faultstring')->item(0)->nodeValue;
            $mensaje['hash_cdr'] = "";
        }
    } else {
        //echo "no responde web";
        $mensaje['cod_sunat']="0000";
        $mensaje['msj_sunat']="SUNAT ESTA FUERA SERVICIO";
        $mensaje['hash_cdr'] = "";
    }
    return $mensaje;
    //$xmlCDR = $doc->getElementsByTagName('applicationResponse')->item(0)->nodeValue;
}

//cpeEnvio('20100066603', 'MODDATOS', 'moddatos', 'BETA/20100066603-01-F001-769543', 'BETA/', '20100066603-01-F001-769543', 'https://e-beta.sunat.gob.pe:443/ol-ti-itcpfegem-beta/billService');
//<wsse:Username>10447915125MODDATOS</wsse:Username>
//<wsse:Password>moddatos</wsse:Password>
?>