<?php

    /**
     * PalindromicNumbers Class
     * It takes the product of 2 numbers and extracts the highest number 
     * from all the palindromic numbers between them
     * @author judachury
     */
    class PalindromicNumbers {

        //Instance variables
        private $numberFrom;
        private $numberTo;
        private $palindrome = null;

        const ZERO = 0;
        const ONE = 1;
        const TEN = 10;

        /**
         * @param integer $numberFrom the lowest number
         * @param integer $numberTo the highest number
         */
        public function __construct($numberFrom, $numberTo) {
            $this->setNumberFrom($numberFrom);
            $this->setNumberTo($numberTo);
        }

        /**
         * @param integer $numberFrom the lowest number
         */
        private function setNumberFrom($numberFrom) {
            $this->numberFrom = $numberFrom;
        }

        /**
         * @param integer $numberTo the highest number
         */
        private function setNumberTo($numberTo) {
            $this->numberTo = $numberTo;
        }

        /**
         * @param integer $palindrome set the current higest palindromic number
         */
        private function setPalindrome($palindrome) {
            $this->palindrome = $palindrome;
        }

        /**
         * @return integer $numberFrom the lowest number
         */
        public function getNumberFrom() {
            return $this->numberFrom;
        }

        /**
         * @return integer $numberTo the highest number
         */
        public function getNumberTo() {
            return $this->numberTo;
        }

        /**
         * @return integer $palindrome the current palindromic number
         */
        public function getPalindrome() {
            return $this->palindrome;
        }

        /**
         * Same as previous method, but more comprehensive meaning
         * @return integer $palindrome the current palindromic number
         */
        public function getLargestPalindrome() {    
            return $this->getPalindrome();
        }

        /**
         * Extract all palindromic numbers from the product of two the supplied numbers
         */
        public function generatePalindromes() {
            //chache instance variables
            $originNumber = $this->getNumberFrom();
            $limit = $this->getNumberTo();
            while ($originNumber <= $limit) {
                //get the product
                $product = $originNumber * $limit;
                //reverse the product and check if it is a palindrome
                if ($product ==  $this->reverseAsString($product)) {
                    $this->setPalindrome($product);
                }
                //increase by one the lowest number
                $originNumber++;
            }
        }

        private function reverse($number) {
            $rsp = self::ZERO;
            while ($number > self::ONE) {
                /*
                    devide the number by ten (decimal number)
                    and add it to the reverse number in the correct
                    unit (decimal, centesimal, milesimal, etc.)
                */
                $rsp = ($rsp * self::TEN) + ($number % self::TEN);
                $number = $number / self::TEN;
            }
            return $rsp;
        }

        private function reverseAsString($number) {
            //return the reverse of a number
            return ( (int) strrev( (string) $number ) );
        }
    }
?>