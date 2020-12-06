<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Boolean
     */
    public function isPalindrome($head): bool {
        if ($head === null || $head->next === null) {
            return true;
        }
        
        $fast = $head;
        $slow = $head;
        for ($i = 1; $fast !== null; $i++) { // Traversing pointers to the list half
            if (0 === $i % 2) {
                $slow = $slow->next;
            }
            $fast = $fast->next;
        }
        
        $half = $this->reverseList($slow); // Reversing the second half
        unset($slow, $fast);
        
        while ($half !== null) { // Checking palindrome
            if ($head->val !== $half->val) {
                return false;
            }
            $head = $head->next;
            $half = $half->next;
        }
        
        return true;
    }
    
    public function reverseList(ListNode $head): ListNode {
        if ($head->next === null) {
            return $head;
        }
        
        $curr = $head->next;
        $prev = $head;
        while ($curr !== null) {
            $next = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $next;
        }
        $head->next = null;

        return $prev;
    }
}
