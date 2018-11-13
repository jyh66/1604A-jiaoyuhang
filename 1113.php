<?php>
//采用递归，利用逻辑与短路特征
public calss Solution{
    int Sum_Solution(int n){
        int ans = n;
        ans && (ans += Sum_Solution(n-1));
        return ans;
    }
}


//方法二：调用java库函数

public calss Solution{
    public int Sum_Solution {
        public int Sum_Sulotion(int n){
            int sum = (int) (Math.pow(n,2)+n);
            return sum>>1;
        }
    }
}

package siwefassan_6_5;
import java.util.Scanner;

public calss Main01{
    int sum=0;
    public static void main(String[]args){
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        Main01.m = new Main01();
        System.out.println(m,solution(n));
    }
}