<?php>
int main(){
    int a[15] = {15,14,13,12,11,10,9,8,7,6,5,4,3,2,1};
    int l = 0, h = 14,x,m;
    printf("输入数字")；
    	scanf("%d", &x);
	    while (l<h){
	        m = (l + h) / 2;
	        if(x == a[m]) break;
	        if (x>a[m])
	            h = m;
	        else
	            l = m;
            if ((l == h) && x != a[h]) {
                printf("-1");
                return 0;
        }
}
    printf("是第d%个元素", m+1);
	    return 0;