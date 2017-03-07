<?php

function b($callback){
    echo "b\n";
    if(is_callable($callback)) {
        call_user_func($callback);
    }else{
        echo $callback;
    }
}

function a(){
    echo "prova\n";
}

b('a');

$x = 5;
b($x);