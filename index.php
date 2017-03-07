<?php

function b($callback){
    echo 'b';

    call_user_func($callback);
}

b();