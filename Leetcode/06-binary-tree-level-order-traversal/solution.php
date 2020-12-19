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
     * @return int[][]
     */
    public function levelOrder(?TreeNode $root): array
    {
        if (null === $root) return [];
        
        $t = [[$root->val]];
        $q = [$root->left, $root->right];

        while (! empty($q)) {
            $tmp = [];
            $v   = [];
            foreach ($q as $n) {
                if (null === $n) continue;
                $tmp[] = $n->left;
                $tmp[] = $n->right;
                $v[]   = $n->val;
            }
            $q = $tmp;
            if (! empty($v)) $t[] = $v;
        }

        return $t;
    }
}
