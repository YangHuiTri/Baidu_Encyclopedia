<?php
    // die and var-dump
    function dd($val){
        echo '<pre>';
        var_dump($val);
        echo '</pre>';
        die();
    }

    // var-dump
    function d($val){
        echo '<pre>';
        var_dump($val);
        echo '</pre>';
    }