<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution 
{

    /**
     * @param  TreeNode $root
     * @return bool
     */
    public function isSymmetric(?TreeNode $root): bool
    {
        if (null === $root) return true;
        
        $q = [$root->left, $root->right];
        while (! empty($q)) {
            $l = array_pop($q);
            $r = array_pop($q);

            if (null === $l && null === $r) continue;
            elseif (null === $l || null === $r) return false;
            if ($l->val !== $r->val) return false;

            $q[] = $l->left;
            $q[] = $r->right;
            $q[] = $l->right;
            $q[] = $r->left;
        }

        return true;
    }   
}
