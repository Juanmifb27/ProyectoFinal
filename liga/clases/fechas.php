<?php

function cambiaf_a_normal_formato($fecha)
{
    $mes_array = array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    preg_match('/([0-9]{2,4})-([0-9]{1,2})-([0-9]{1-2})/', $fecha, $mifecha);

    $mes_actual = $mifecha[2] * 1;

    $fecha_final = $mifecha[3] . " " . $mes_array[$mes_actual] . " " . $mifecha[1];
    return $fecha_final;
}

////////////////////////
// Convierte fecha de mysql a normal
////////////////////////

function cambiaf_a_normal($fecha)
{
    if (trim($fecha) != "" && strcmp($fecha, "0000-00-00") != 0) {
        preg_match('/([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})/', $fecha, $mifecha);
        $fecha_final = $mifecha[3] . "/" . $mifecha[2] . "/" . $mifecha[1];
        return $fecha_final;
    } else {
        $fecha_final = "";
        return $fecha_final;
    }
}

// COnvierte fecha de normal a mysql

function cambiaf_a_mysql($fecha)
{
    if (trim($fecha) != "") {
        preg_match('~([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})~', $fecha, $mifecha);
        $fecha_final = $mifecha[3] . "-" . $mifecha[2] . "-" . $mifecha[1];
        return $fecha_final;
    } else {
        $fecha_final = "0000-00-00";
        return $fecha_final;
    }
}

// Compara fecha
function date_compare($f1,$f2){
    //esto funcionara siempre que las fechas esten separadas por -, y sean de la form
	//anyo-mes-dia
    list($anyo1,$mes1,$dia1) = explode("-",$f1);
    list($anyo2,$mes2,$dia2) = explode("-",$f2);

    if ($anyo1==$anyo2) {
        if ($mes1==$mes2) {
            if ($dia1==$dia2) {
                return 0;
            }elseif ($dia1>$dia2) {
                return 1;
            }else{
                return -1;
            }
        }elseif ($mes1>$mes2) {
            return 1;
        }else{
            return -1;
        }
    }elseif ($anyo1>$anyo2) {
        return 1;
    }else{
        return -1;
    }
}
