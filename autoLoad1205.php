<?php

function __autoLoad($className){
//    $parm = explode('\\',$className);
//    array_pop($parm);
//    include_once implode('\\',$parm) . ".php";
    if ($className=='display'){
        require_once APP_PATH . '/fromwork/' . $className . '.php';
    }
    switch (substr($className,-5)){
        case 'oller':
            require_once APP_PATH . '/controller/' . $className . '.php';
            break;
    }
}