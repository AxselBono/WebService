<?php


function _ValidateMethodExists($pMethod){

    $method_list = array('lcase', 'ucase', 'reverse', 'sumar', 'restar', 'length', 'capitalize', 'equals', 'isnumeric', 'InString', 'multiplicar', 'dividir', 'modulo');

    if (in_array($pMethod, $method_list, TRUE)) {
        return 0;
    } else{
        return 50045;
    };
};
function _ValidateParamsForThisMethod($pMethod, $pP1, $pP2){
    $err=99999;
    switch ($pMethod){
            case "lcase":
                $res=ValidString($pP1);
                break;
            case "ucase":
                $res=ValidString($pP1);
                break;
            case "reverse":
                $res=ValidString($pP1);
                break;
            case "sumar":
                $res=ValidNum($pP1,$pP2);
                break;
            case "restar":
                $res=ValidNum($pP1,$pP2);
                break;
            case "length":
                $res=ValidString($pP1);
                break;
            case "capitalize":
                $res=ValidString($pP1);
                break;
            case "equals":
                $res=ValidString($pP1);
                break;
            case "isnumeric":
                $res=ValidString($pP1);
                break;
                
            case "InString":
                $res=ValidString($pP1, $pP2);
                break;
            case "multiplicar":
                $res=ValidNum($pP1, $pP2);
                break;
            case "dividir":
                $res=ValidNum($pP1, $pP2);
                break;
            case "modulo":
                $res=ValidNum($pP1, $pP2);
                break;
    }

    return $res;
};


$err= _ValidateMethodExists($method);

if ($err==0){
    $err= _ValidateParamsForThisMethod($method,$p1,$p2);
}
?> 