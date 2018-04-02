<?php

function stream () {
        $dir = "/var/www/html/disconnect";
        $filename = rand(1, 7999);
        $file = $dir."/".$filename.".au";
        if(file_exists($file)){
                header('Content-type: audio/basic');
                header('Content-length: ' . filesize($file));
                header('Cache-Control: no-cache');
                readfile($file);
        }else{
                stream();
                //header("HTTP/1.0 404 Not Found");
        }
}

stream();
