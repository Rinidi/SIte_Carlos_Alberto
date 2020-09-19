<?php

function dataPtBrParaMysql($data)
{
    $partes = explode("/", $data);
    return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
}
function dataMysqlParaPtBr($data){
    $data = new DateTime($data);
    return $data->format("d/m/Y");
}