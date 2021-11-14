<?php

function activelink($route){
    if(Route::is($route)){
        return ('active');
    }
}
?>