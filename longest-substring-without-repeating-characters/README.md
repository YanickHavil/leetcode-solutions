# Longest Substring Without Repeating Characters

**Link:**  
[LeetCode - Longest Substring Without Repeating Characters](https://leetcode.com/problems/longest-substring-without-repeating-characters/)

---

## Intuition

My first thought was that I would need to iterate through the entire string to evaluate each character.  
I knew I would need a temporary variable to keep track of the longest substring found so far.  
I also realized I would need an efficient way to restart from a valid substring whenever I encountered a repeated character.  
I suspected the main challenge would lie in handling these duplicate characters while keeping the algorithm fast enough.

---

## Approach

My approach was to find an efficient way to handle substring updates when duplicates were encountered.  
Initially, I experimented with C#'s built-in methods like `Contains` to understand how I could detect repeated characters.  
I started with a non-optimized version that passed a few test cases using this method.

The first issue I encountered was when the duplicate character appeared at index 0.  
I realized I couldn't just reset the entire substring up to the current index — I needed a way to remove only the part of the substring up to the first occurrence of the repeated character.

To fix this, I used `IndexOf` and `Remove` to slice the substring precisely, removing only the portion up to and including the first duplicate character.

After implementing that logic, I refined and optimized the code to improve performance and make it pass all the test cases.

---

## Time Spent

I spent about 1 hour working through this problem.  
Most of the time was spent figuring out how to handle duplicate characters correctly and experimenting with substring manipulation using built-in C# methods.

---

## Notes

I did not use ChatGPT or any LLM to solve this challenge.  
I wanted to test and improve my own reasoning and string manipulation skills, even if the approach wasn’t optimal at first.

---

## Complexity

- **Time Complexity:** O(n²) in the worst case, due to repeated string operations like `Contains`, `IndexOf`, `Remove`, and `+=` which are all linear in the substring size.
- **Space Complexity:** O(n), since we store substrings in `temp` and `result`, each potentially up to the size of the input string.

---

## Code

```csharp
public class Solution {
    public int LengthOfLongestSubstring(string s) {
        string temp = String.Empty;
        string result = String.Empty;
        foreach(char c in s){
            if(temp.Contains(c)){
                if(temp.IndexOf(c) > -1){
                    int index = temp.IndexOf(c);
                    temp = temp.Remove(0, (index + 1));
                    temp += c;
                    if(result.Length < temp.Length) result = temp;
                } 
            }
            else{
                temp += c;
                if(result.Length < temp.Length) result = temp;
            } 
        }
        return result.Length;
    }
}
