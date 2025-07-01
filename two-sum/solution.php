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