<?php
    function shortTextLength($string,$charLen){
        if (strlen($string) > $charLen) {
        
            // truncate string
            $stringCut = substr($string, 0, $charLen);
            $endPoint = strrpos($stringCut, ' ');
        
            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '... <span class="open" style="color:red;cursor: pointer;">Read More</span>';
        }
        return $string;
    }

?>