<?php 
    $text="The quick brown fox jumps over the lazy dog.";
    function manipulateString($text){
        $lowercaseText=strtolower($text);
        $modifiedText=str_replace('brown','red',$lowercaseText);
        echo $modifiedText;
    }
    manipulateString($text);
    

?>