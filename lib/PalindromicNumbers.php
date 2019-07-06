<?php

    class PalindromicNumbers {

        private $numberFrom;
        private $numberTo;
        private $palindrome = null;

        const ZERO = 0;
        const ONE = 1;
        const TEN = 10;

        public function __construct($numberFrom, $numberTo) {
            $this->setNumberFrom($numberFrom);
            $this->setNumberTo($numberTo);
        }

        private function setNumberFrom($numberFrom) {
            $this->numberFrom = $numberFrom;
        }

        private function setNumberTo($numberTo) {
            $this->numberTo = $numberTo;
        }

        private function setPalindrome($palindrome) {
            $this->palindrome = $palindrome;
        }

        public function getNumberFrom() {
            return $this->numberFrom;
        }

        public function getNumberTo() {
            return $this->numberTo;
        }

        public function getPalindrome() {
            return $this->palindrome;
        }

        public function getLargestPalindrome() {    
            return $this->getPalindrome();
        }

        public function generatePalindromes() {
            $originNumber = $this->getNumberFrom();
            $limit = $this->getNumberTo();
            while ($originNumber <= $limit) {
                $product = $originNumber * $limit;
                if ($product ==  $this->reverseAsString($product)) {
                    $this->setPalindrome($product);
                }
                $originNumber++;
            }
        }

        private function reverse($number) {
            $rsp = self::ZERO;
            while ($number > self::ONE) {
                $rsp = ($rsp * self::TEN) + ($number % self::TEN);
                $number = $number / self::TEN;
            }
            return $rsp;
        }

        private function reverseAsString($number) {
            return ( (int) strrev( (string) $number ) );
        }
    }
?>