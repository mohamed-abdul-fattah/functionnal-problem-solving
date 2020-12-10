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
     * Time complexity is O(n)
     * Space complexity is O(n)
     * 
     * @param ListNode $head
     * @return Boolean
     */
    public function hasCycle(?ListNode $head): bool
    {
        if (null === $head || null === $head->next) return false;
        
        $list = [];
        $curr = $head;
        
        while ($curr !== null) {
            $id = spl_object_id($curr);
            if (! isset($list[$id])) {
                $list[$id] = 1;
                $curr      = $curr->next;
            } else {
                return true;
            }
        }

        return false;
    }
}
