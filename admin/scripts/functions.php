<?php
function redirect_to($location){
    if($location != null){
        header('Location: '.$location);
        exit; //important for security
    }
}