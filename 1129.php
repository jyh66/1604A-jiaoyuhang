<?php>

public class wanggezoufa {
//网格走法
public static void main(String[] args) {
System.out.println(method(17,16));//测试


}
static long a[][]=new long[1024][1024];//row,line
	public static long method(int row,int line) {
    if(row==0||line==0){
        a[row][line]=1;
        return a[row][line];
    }else {
        if(a[row][line]==0) {
            a[row][line]=method(row-1,line)+method(row,line-1);
            return a[row][line];
        }else {
            return a[row][line];
        }
    }
}
}


//方法二

using namespace std:

int main(){
    int x,y;
    cin >> x >>y;
    int dp[11][11];
    for (int j=0; j <=y; j++)
        dp[0][j] = 1;
    for (int i = 0; i <= x; i++)
		dp[i][0] = 1;
	for (int i = 1; i <= x; i++)
	{
        for (int j = 1; j <= y; j++)
		  {
              dp[i][j] = dp[i - 1][j] + dp[i][j-1];
          }
	}
	cout << dp[x][y] << endl;
}
