<?php>
public class Solution{
    public ArrayList<Integer>FindNumbersWithSum(int [] array,int sum){
ArrayList<Integer> list = new ArrayList<Integer>();
    // 先判断特殊情况：数字少于两个时
if (array.length < 2 || array == null) {
return list;
}
// 获取数组的长度
int len = array.length;
		int start = 0;
		int end = len - 1;
		while (start < end && start < len - 1 && end > 0) {
            if (array[start] + array[end] == sum) {
                list.add(array[start]);
				list.add(array[end]);
				return list;

			}
            if (array[start] + array[end] > sum) {
                end--;
            }
            if (array[start] + array[end] < sum) {
                start++;
            }
        }
		return list;
}
}