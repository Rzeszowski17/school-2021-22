#include <iostream>
using namespace std;

int silnia_re(int n){
	if(n!=0){
		return n*silnia_re(n-1);
	}else{
		return 1;
	}
}
int main(){

	int n;
	cout<<"Podaj liczbe"<<endl;
	cin>>n;
	cout<<silnia_re(n);

}
