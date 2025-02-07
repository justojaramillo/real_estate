<?php

class html{
    public static function doctype():void{
        echo "<!DOCTYPE html>".PHP_EOL;
    }
    public static function footer($open = true):void{
        echo $open ? "<footer>".PHP_EOL:"</footer>".PHP_EOL;
    }
    public static function div($open = true):void{
        echo $open ? "<div>".PHP_EOL:"</div>".PHP_EOL;
    }
    public static function head($open = true):void{
        echo $open ? "<head>".PHP_EOL:"</head>".PHP_EOL;
    }
    public static function utf8():void{
        echo '<meta charset="UTF-8">';
    }
}



?>