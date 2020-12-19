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
        
        return $this->compare($root->right, $root->left);
    }
    
    private function compare(?TreeNode $rightTree, ?TreeNode $leftTree): bool
    {
        if (null === $rightTree && null === $leftTree) {
            return true;
        } elseif (null === $rightTree || null === $leftTree) {
            return false;
        } elseif ($rightTree->val !== $leftTree->val) {
            return false;
        }
        
        return $this->compare($rightTree->right, $leftTree->left) &&
               $this->compare($rightTree->left, $leftTree->right);
    }
}
