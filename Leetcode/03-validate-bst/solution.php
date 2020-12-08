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
     * @param TreeNode $root
     * @return Boolean
     */
    public function isValidBST(?TreeNode $root): bool
    {
        return $this->validateBST($root, null, null);
    }

    private function validateBST(?TreeNode $node, ?int $lower, ?int $upper): bool
    {
        if (null === $node) {
            return true;
        }

        $val = $node->val;
        if (null !== $lower && $val <= $lower) { return false; }
        if (null !== $upper && $val >= $upper) { return false; }

        return $this->validateBST($node->right, $val, $upper) &&
               $this->validateBST($node->left, $lower, $val);
    }
}
