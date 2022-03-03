<?php
#//echo "Módulo validate";

function _ValidateMethodExists($pMethod){

    $method_list = array('lcase', 'ucase', 'reverse', 'sumar', 'restar', 'length', 'capitalize', 'equals', 'isnumeric', 'InString', 'multiplicar', 'dividir', 'modulo');

    if (in_array($pMethod, $method_list, TRUE)) {
        return 0;
    } else{
        return 5001;
    };
};
function _ValidateParamsForThisMethod($pMethod, $pP1, $pP2){
    $err=99999;
    switch ($pMethod){
            case "lcase":
                $err=ValidString($pP1);
                break;
            case "ucase";
                $err=ValidString($pP1);
                break;
            case "reverse";
                $err=ValidString($pP1);
                break;
            case "sumar";
                $err=ValidNumber($pP1,$pP2);
                break;
            case "restar";
                $err=ValidNumber($pP1,$pP2);
                break;
            case "length";
                $err=ValidString($pP1);
                break;
            case "capitalize";
                $err=ValidString($pP1);
                break;
            case "equals";
                $err=ValidString($pP1);
                break;
            case "isnumeric";
                $err=ValidString($pP1);
                break;
            case "InString";
                $err=ValidString($pP1, $pP2);
                break;
            case "multiplicar";
                $err=ValidNumber($pP1, $pP2);
                break;
            case "dividir";
                $err=ValidNumber($pP1, $pP2);
                break;
            case "modulo";
                $err=ValidNumber($pP1, $pP2);
                break;
    }

    return $err;
};


$err= _ValidateMethodExists($method);

if ($err==0){
    $err= _ValidateParamsForThisMethod($method,$p1,$p2);
}





?> 