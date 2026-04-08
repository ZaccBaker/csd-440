<?php 
    function phrase_check ($phrase){
        $phrase_ = strtolower(preg_replace("/\s+/", "", $phrase));

        $reversedPhrase = strrev($phrase_);

        if ($phrase_ == $reversedPhrase) {
            return "Yes";
        } else {
            return "No";
        }
    }
?>