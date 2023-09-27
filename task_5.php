<?php

    function generatePassword($length){
        $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
        $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numberChars = '0123456789';
        $specialChars = '!@#$%^&*()_+';

        $allChars= $lowercaseChars . $uppercaseChars .$numberChars . $specialChars ;

        $password = ' ';

        for($i=0; $i<$length; $i++){
            $randomIndex = rand(0 ,strlen($allChars) -1);
            $randomChar = $allChars[$randomIndex];

            $password .= $randomChar;
        }
        echo "Generated Password: {$password}";
    }
    $password=12;
    generatePassword($password);
    // just test some text

?>
