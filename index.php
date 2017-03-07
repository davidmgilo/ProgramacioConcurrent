<?php

function b($callback){
    echo "b\n";

    call_user_func($callback);
}

function a(){
    echo "a\n";
}

b('a');