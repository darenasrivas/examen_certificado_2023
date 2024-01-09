<?php

//FUNCIONES UTILIZADAS


function sumar(string|null $op1, string|null $op2):int|string{
    //Si es númerico, es decir, is_numeric
    if((is_numeric($op1)) && (is_numeric($op2))) {
        return $op1 + $op2;
    }else{
        return "$op1 + $op2 no se puede hacer";
    }
}

function restar(string|null $op1, string|null $op2):int|string{
    //Si es númerico, es decir, is_numeric
    if((is_numeric($op1)) && (is_numeric($op2))) {
        return $op1 - $op2;
    }else{
        return "$op1 - $op2 no se puede hacer";
    }
}

function multiplicar(string|null $op1, string|null $op2):int|string{
    //Si es númerico, es decir, is_numeric
    if((is_numeric($op1)) && (is_numeric($op2))) {
        return $op1 * $op2;
    }else{
        return "$op1 * $op2 no se puede hacer";
    }
}

function dividir(string|null $op1, string|null $op2):int|string{
    //Si es númerico, es decir, is_numeric
    if((is_numeric($op1)) && (is_numeric($op2))) {
        if($op2 != 0)
            return $op1 / $op2;
    }else{
        return "$op1 / $op2 no se puede hacer";
    }
    return "$op1 no se puede dividir por 0";
}

?>