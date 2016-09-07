
// C program to sort using one swap
#include<iostream>
#include<algorithm>
using namespace std;
 
int sortByOneSwap(int arr[], int n)
{
    int Swab = 0;
 
    for (int i=n-1;i>0;i--)
    {
        if (arr[i]<arr[i-1])
        {
            int j=i-1;
            while(j>=0 && arr[i]<arr[j])
                {j--;}
                
            Swab = 1;
 
            swap(arr[i],arr[j+1]);
            break;
        }
    }
 
    for (int i=1; i<n; i++)
    {
		if (arr[i] < arr[i-1])
          {return 0;}   
    }
       
     return Swab;
}
 
/* Driver program to test insertion sort */
int main()
{
    int arr[] = {10, 30, 20, 40, 50, 60, 70};
    int n = sizeof(arr)/sizeof(arr[0]);
 
    sortByOneSwap(arr, n)? cout << "Yes": cout << "No";
 
    return 0;
}























/*
int solution(int A[], int N) 
{
    // write your code in C99 (gcc 4.8.2)
    int bot,top;
    
    for(int z=1;z<=N;z++)	//P ( 1,2,3,4,5,6,7,8)
    {
    	bot=0;top=0;
    	for(int x=0;x<z;x++)	//bot
    	{
    		if(x != z)
			{
    			bot = bot + A[x];
    		}
			else 
			{continue;}
    		
    	}
    	
    	for(int c=N-1;c>z;c--)	//top
    	{
    		if(c != z)
			{
    			top = top + A[c];
    		}
			else 
			{continue;}
    		
    	}
    	
    	
    	if(top==bot)
    	{
    		return z;
    		//printf("%d ",z);
    	}
		else
		{return -1;}
		//{printf("%d ", fkc);}
	
	}
    
}

int main()
{
	//int N = 8;
	int A[] = {-1 , 3 , -4 , 5 , 1 , -6 , 2 , 1};

	int N = sizeof(A) / sizeof(int);
	int fkc = -1;
	//for(int y=1;y<=N;y++)
	printf("%d",solution(A , N) );
	//printf("%d" , N);
	/*
    int bot,top;
    
    for(int z=1;z<=N;z++)	//P ( 1,2,3,4,5,6,7,8)
    {
    	bot=0;top=0;
    	for(int x=0;x<z;x++)	//bot
    	{
    		if(x != z)
			{
    			bot = bot + A[x];
    		}
			else 
			{continue;}
    		
    	}
    	
    	for(int c=N-1;c>z;c--)	//top
    	{
    		if(c != z)
			{
    			top = top + A[c];
    		}
			else 
			{continue;}
    		
    	}
    	
    	
    	if(top==bot)
    	{
    		printf("%d ",z);
    	}
		else
		{printf("%d ", fkc);}
	
	}
		getchar();
		
}*/
