<?php
$myfin = file_get_contents('https://myfin.by/crypto-rates');
function parse($content, $start, $end){
    $start_pos = strpos($content, $start);
    if ($start_pos === false) return 0;
    $dell_start = substr($content, $start_pos);
    $end_pos = strpos($dell_start, $end);
    $dell_end = substr($dell_start, 0, $end_pos);
    var_dump($dell_end);
}
parse($myfin, '<article', '</article>');