<?php
function getError($Perr){
    switch($Perr){
        case"5001";
            $err_desc="method invalid";
        break;
        case"6000";
            $err_desc="not string";
        break;
        case"6100";
            $err_desc="not numeric";
        break;
        case"99999999999999999";
            $err_desc="unauthorized method";
        break;
        case"0";
            $err_desc="All OK";
        break;
    }
    return $err_desc;
}
?>