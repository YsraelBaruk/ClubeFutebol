<?php
function exibirDadosClube($clube){
    $tds = '';
    $clube = (array) $clube;
    foreach ($clube as $value){
        $tds .= '<td>'.$value.'</td>';
    }
    return '<tr>'.$tds.'</tr>';
}