# Two Sum

## Problem
Given an array of integers `nums` and an integer `target`, return the indices of the two numbers such that they add up to `target`.

## First thoughts
At first, I thought about using a double loop to compare each element with the others.

## Optimized approach
I figured the algorithm could be optimized. I used a hash table to store each number from `$nums` as the key and its index as the value.  
This allowed me to traverse the array only once. I came up with this after trying out a few basic test cases.

## Complexity
- **Time Complexity:** O(n), because we only iterate through the array once and each lookup in the hash table is done in constant time.
- **Space Complexity:** O(n), since we store up to n elements in the hash table in the worst case.

## Solution (PHP)
```php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $seen = [];
        for($i=0;$i<count($nums);$i++){
            $needed = $target - $nums[$i];
            if(isset($seen[$needed])) return [$seen[$needed],$i];
            $seen[$nums[$i]] = $i;    
        }
        return false;
    }
}