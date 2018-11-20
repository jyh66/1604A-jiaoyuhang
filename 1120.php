<?php>
int number0f1(int n){
    int count =0;
    unsingned int flag = 1;
    while(flag){
        if(n&1)
            count++;
        falg = flag <<1;
    }
    return count;
}
//方法二
int numberOf_1(int n)
{
    int count = 0;
	while (n) {
        ++count;
        n = （n -  1）& n;
	}
	return count;
}
int main()
{
int num = 0;
	printf("Please input Number:\n");
	scanf_s("%d", &num);
	int ret = numberOf_1(num);
	//int ret = numberIs1(num);
	//int ret = numberOf1(num);
	printf("ret = %d\n", ret);
	system("pause");
	return 0;
}
