// LeetCode Problem: Longest Substring Without Repeating Characters
// https://leetcode.com/problems/longest-substring-without-repeating-characters/
// 
// Time Complexity: O(n^2)
// Space Complexity: O(n)

public class Solution
{
    public int LengthOfLongestSubstring(string s)
    {
        string temp = String.Empty;
        string result = String.Empty;

        foreach (char c in s)
        {
            if (temp.Contains(c))
            {
                if (temp.IndexOf(c) > -1)
                {
                    int index = temp.IndexOf(c);
                    temp = temp.Remove(0, (index + 1));
                    temp += c;
                    if (result.Length < temp.Length) result = temp;
                }
            }
            else
            {
                temp += c;
                if (result.Length < temp.Length) result = temp;
            }
        }

        return result.Length;
    }
}
