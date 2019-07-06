<?php
    //function
    //accept a starting numbers as arguments
    function getLargestPalindromeFromRange($fromNum, $toNum) {
        //start with a null value to return
        $rsp = null;

        /*
            Start calulating the product of the given factors
            increase the value of fromNum by one once calculations
            are completed
        */
        while ($fromNum <= $toNum) {
            //get the product of the given factors
            $product = $fromNum * $toNum;

            /*
                now, we need to reverse the number to compare
                with the product and find out if the product is
                a palindromic number
            */
            //default result for the reverse version of the product            
            $revProd = 0;
            //we need product later, so we can't modify the variable
            $tempProd = $product;
            while ($tempProd > 1) {
                /*
                    devide the number by ten (decimal number)
                    and add it to the reverse number in the correct
                    unit (decimal, centesimal, milesimal, etc.)
                */
                $revProd = ($revProd * 10) + ($tempProd % 10);
                //remove a unit and continue looping
                $tempProd = $tempProd / 10;
            }
            //is the product equal to reverse
            if ($product === $revProd) {
                $rsp = $product;
            }
            //Increase the value by one
            $fromNum++;
        }
        return $rsp;
    }

    function getLargestPalindromeFromRange2($fromNum, $toNum) {
        //start with a null value to return
        $rsp = null;

        /*
            Start calulating the product of the given factors
            increase the value of fromNum by one once calculations
            are completed
        */
        while ($fromNum <= $toNum) {
            //get the product of the given factors
            $product = $fromNum * $toNum;

            /*
                now, we need to reverse the number to compare
                with the product and find out if the product is
                a palindromic number
            */
            //default result for the reverse version of the product            
            $revProd = (string) $product;
            $revProd = strrev($revProd);
            $revProd = (int) $revProd;
            //Althoug, the three lines above are more explicite,
            //we can also do it in one line
            //$revProd = (int) strrev( (string) $product );

            //is the product equal to reverse
            if ($product === $revProd) {
                $rsp = $product;
            }
            //Increase the value by one
            $fromNum++;
        }
        return $rsp;
    }

    //recursive functions
    //accept a starting numbers as arguments
    function getLargestPalindromeFromRangeRecursive($fromNum, $toNum) {
        //use recursive function to calculate the result
        return getLargestPalindrome($fromNum, $toNum, null);
    }

    function getLargestPalindrome($from, $to, $result) {
        // if number are equal end recursion
        if ($from == $to) {
            //result is always carried on the arguments
            return $result;
        }
        //produce the product
        $product = $from * $to;
        //check if this is a palindromic number
        if ($product === reverse($product)) {
            //this is the highest number so far
            $result = $product;
        }

        //increase the lowest facter
        $from++;
        //continue recursion
        return getLargestPalindrome($from, $to, $result);
    }

    function reverse($number) {
        //default response for the reverse version of the product  
        $rsp = 0;
        while ($number > 1) {
             /*
                devide the number by ten (decimal number)
                and add it to the reverse number in the correct
                unit (decimal, centesimal, milesimal, etc.)
            */
            $rsp = ($rsp * 10) + ($number % 10);
            //remove a unit and continue looping
            $number = $number / 10;
        }
        return $rsp;
    }
?>