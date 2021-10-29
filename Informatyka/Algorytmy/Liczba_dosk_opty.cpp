#include <iostream>
using namespace std;
bool doskonala(int n){
	if(n<=0)
		return false;
	int suma=1;
	for(int i=2; i<=n/2; i++)
	if(n%i==0)
		suma+=i;
	if(suma==n)
		return true;
	return false;
}
int main(){
	int n;
	cout<<"Porgram sprawdza czy liczba jest doskonala"<<endl;
	cin>>n;
	cout<<"1-Jest doskonala, 0-nie jest doskonala"<<endl;
	cout<<"Odp: "<<doskonala(n)<<endl;
	return 0;
}
