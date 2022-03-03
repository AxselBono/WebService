<?php
// $err_desc = getError($err);

$xmlstr=<<<XML
<ws_response>
    <head>
        <date>$data</date>
        <method>$method</method>
        <parameters>
            <p1>$p1</p1>
            <p2>$p2</p2>
        </parameters>
        <errors>
            <error>
                <num_error>$err</num_error>
                <message_error>$err_desc</message_error>
            </error>
        </errors>
    </head>
    <body>
        <response_value>$res</response_value>
    </body>
</ws_response>
XML;

header("Content-Type:text/xml");



$xml_obj =new SimpleXMLElement($xmlstr);

echo $xml_obj->asXML();
/*
*/
?>