# Add Two Numbers

**Problem**:  
Given two non-empty linked lists representing two non-negative integers in reverse order, add them and return the result as a linked list.

**First thoughts**:  
At first, I thought I would need to create arrays to store the digits from each linked list, then reverse them to form the full numbers. After calculating the result, I would reverse the digits again and build a new linked list from them.

**Approach**:  
I converted the lists into arrays, reversed them, used `bcadd()` to sum them as strings (to avoid PHP's 64-bit integer limit), then split the result into digits to create the output list.  
This was necessary because native integers can't represent values beyond `9223372036854775807` in PHP.  
I considered optimizing using manual digit-by-digit addition and carry management, and later validated that approach using AI tools like ChatGPT, but chose to submit my own version first.

**Time Complexity**: O(n + m)  
**Space Complexity**: O(n + m)

**Link**: [LeetCode - Add Two Numbers](https://leetcode.com/problems/add-two-numbers/)