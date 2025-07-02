<?php
/**
 * LeetCode Problem: Add Two Numbers
 * https://leetcode.com/problems/add-two-numbers/
 * 
 * Solution using array conversion and bcadd to handle large integers
 * Time Complexity: O(n + m)
 * Space Complexity: O(n + m)
 */

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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {      
        $stack = [];
        $head = $l1;

        while ($head !== null) {
            $stack[] = $head->val;
            $head = $head->next;
        }
        $reversedstackedl1 = array_reverse($stack);
        $number1 = implode('', $reversedstackedl1);

        $stack = [];
        $head = $l2;
        while ($head !== null) {
            $stack[] = $head->val;
            $head = $head->next;
        }
        $reversedstackedl2 = array_reverse($stack);
        $number2 = implode('', $reversedstackedl2);

        $result = bcadd($number1, $number2);
        $digits = str_split($result);

        $head = new ListNode($digits[count($digits) - 1]);
        $result = $head;

        for ($i = count($digits) - 2; $i >= 0; $i--) {
            $result->next = new ListNode($digits[$i]);
            $result = $result->next;
        }

        return $head; 
    }
}