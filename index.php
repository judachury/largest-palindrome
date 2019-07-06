<?php
    require_once('.\lib\PalindromicNumbers.php');
    require_once('.\lib\functions.php');   

    //function
    /* echo microtime(true) . '<br>';
    print_r( getLargestPalindromeFromRange(100, 999) );
    echo '<br>' . microtime(true) . '<br>';
    echo '<hr>'; */

    //function 2
    echo microtime(true) . '<br>';
    print_r( getLargestPalindromeFromRange2(100, 999) );
    echo '<br>' . microtime(true) . '<br>';
    echo '<hr>';

    //recursive
    /* echo microtime(true) . '<br>';
    print_r(getLargestPalindromeFromRangeRecursive(100, 999));
    echo '<br>' . microtime(true) . '<br>';
    echo '<hr>'; */

    //oo
    $palindromicNum = new PalindromicNumbers(100, 999);
    $palindromicNum->generatePalindromes();
    echo microtime(true) . '<br>';
    print_r( $palindromicNum->getLargestPalindrome() );
    echo '<br>' . microtime(true) . '<br>';
?>