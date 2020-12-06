<?php

class Solution {

  /**
   * @param String $s
   * @return Boolean
   */
  function isPalindrome($s) {
      $s = preg_replace('/[^0-9a-z]/', '', strtolower($s));
      return $s === strrev($s);
  }
}
