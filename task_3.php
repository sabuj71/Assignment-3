<?php 
    $grades = array(85, 92, 78, 88, 95);

    function sortGradeDescending($grades){
        arsort($grades);
        print_r($grades);
    }
    sortGradeDescending($grades);
?>