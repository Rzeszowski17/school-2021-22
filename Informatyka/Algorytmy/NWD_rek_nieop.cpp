#include <iostream>
using namespace std;

int optNWD(int a,int b)
{
	if(b)
		return optNWD(b,a%b);
	else
		return a;
}


int main(){
	int a, b;
	cin>>a;
	cin>>b;
	cout<<nwd(a, b);
}
