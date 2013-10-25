<?php

function mifuncion($line,$tag = 'b') {
    $CI = & get_instance();
    $return = '<'.$tag.'>'.$line.'</'.$tag.'>';
    return $return;
}

function mifunction2($line,$tag = 'b',$append = ''){
    $CI = & get_instance();
    $return = '<'.$tag.'>'.$line.' '.$apend.'</'.$tag.'>';
    return $return;
}
