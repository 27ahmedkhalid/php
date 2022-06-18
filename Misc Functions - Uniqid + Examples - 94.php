<?php
    /*
        uniqid(prefix, more_entropy);
        unique identifier
    */
        $random = uniqid('script1_',false);
        echo $random .'<br>';
        var_dump($random);