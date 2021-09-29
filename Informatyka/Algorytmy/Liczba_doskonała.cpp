#include <iostream>
using namespace std;

bool dosk1(int n){
	int i=1;
	int sum=0;
	 while(i<n){
	 	if(n%i==0)
	 		sum+=1;
	 		i++; 
	 }
	 return sum==n;
}

bool dosk2(int n){
	if(n<=0)
		return false;
		int i=2, sum=1;
		for(i; i<n; i++)
			if(n%i==0)
				sum+=i;
			if(sum==i)
			return true;
		return false;

}

int main(){
	int n;
	cin>>n;
	cout<<dosk1(n);
}

