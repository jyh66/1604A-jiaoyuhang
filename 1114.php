<?php>
public class Solution{
    public int Add(int num1,int num2){
        if(num2==0){
            return num1;
    }
        if(num1==0){
            return num2;
        }
return Add(num1&num2)<<1,num1^num2;
    }
}

//非迭代

    public int Add(int num1,int num2){
    while(num2!0){
        int sum=num1^num2;
        num2=(num1&num2)<<1;
        num1=sum;
    }
    return num1;
}
