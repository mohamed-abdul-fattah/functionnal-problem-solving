<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution 
{
    /**
     * Solution time complexity is O(n+k) where k is the cyclic loop until the
     * fast runner pointer meets the slow walker pointer.
     * Space complexity is O(1)
     * 
     * @param ListNode $head
     * @return Boolean
     */
    public function hasCycle(?ListNode $head): bool
    {
        if (null === $head || null === $head->next) return false;
        
        $runner = $head->next;
        $walker = $head;

        while ($runner !== $walker) {
            if (null === $runner || null === $runner->next) {
                return false;
            }
            
            $runner = $runner->next->next;
            $walker = $walker->next;
        }
        
        return true;
    }
}
