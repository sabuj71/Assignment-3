<?php 
    // $numbers=['1','2','3','4','5','6','7','8','9','10'];
    $numbers=[1,2,3,4,5,6,7,8,9,10];
    function removeEvenNumbers($numbers){
        $filteredNumbers= [];
        foreach($numbers as $number){
            if($number % 2 !==0){
                $filteredNumbers[] =$number;
            }
        }
        print_r($filteredNumbers);
    }
    removeEvenNumbers($numbers);
?>