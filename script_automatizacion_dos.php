<?php

$year = date('Y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$gestion_dia = ($dia - 2);
$minutos = date('i');
$segundos = date('s');
$buscar_carpeta = './carpeta_db';
// BIN.RAMON.SH
echo 'Fecha actual: ' . $year . '-' . $mes . '-' . $dia . '<br>';
echo '<h1> realizar operación con fechas </h1> <br>';

// leer el contenido de la carpeta
if ($gestor = opendir($buscar_carpeta)) {
    while (false !== ($archivo = readdir($gestor))) {

        for ($i = 0; $i < $gestion_dia; $i++) {

            if ($i < 10) {
                if ($archivo != '.' && $archivo != '..') {

                    $nombrebd = "nombrebd-" . $year . '-' . $mes . '-0' . $i . '.sql';

                    if ($archivo == $nombrebd) {
                        echo 'Eliminar ' . $archivo . '<br>';
                        $abrir_archivo = fopen("$buscar_carpeta/controlDeBorrado.txt", "a+");
                        //    Escribir archivo
                        fwrite($abrir_archivo, "\n Eliminar bd: $archivo fecha de ejecucion: $year-$mes-$dia  $hora:$minutos:$segundos \n");
                        // cerrar archivo
                        fclose($abrir_archivo);
                        unlink($buscar_carpeta . '/' . $archivo);
                        echo 'Archivo eliminado <br>';
                    }// BIN.RAMON.SH

                }
            }

            if ($archivo != '.' && $archivo != '..') {

                $nombrebd = "nombrebd-" . $year . '-' . $mes . '-' . $i . '.sql';

                if ($archivo == $nombrebd) {
                    echo 'Eliminar ' . $archivo . '<br>';
                    $abrir_archivo = fopen("$buscar_carpeta/controlDeBorrado.txt", "a+");
                    //    Escribir archivo
                    fwrite($abrir_archivo, "\n Eliminar bd: $archivo fecha de ejecucion: $year-$mes-$dia  $hora:$minutos:$segundos \n");
                    // cerrar archivo
                    fclose($abrir_archivo);
                    unlink($buscar_carpeta . '/' . $archivo);
                    echo 'Archivo eliminado <br>';
                }

            }// BIN.RAMON.SH

        }
        // BIN.RAMON.SH

    }
}
