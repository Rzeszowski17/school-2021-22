#include <iostream>
using namespace std;
bool czy_anag(string a, string b){
	int dl1=a.length(), dl2=b.length();
		if(dl1!=dl2)
			return false;
			
		int licz[127]={};
		for(int i=0; i<dl1; i++)
			licz[a[i]]++;
		for(int i=0; i<dl2; i++)
			licz[b[i]]--;
			
		for(int i=0; i<127; i++)
			if(licz[i]!=0)
				return false;
	
		return true;
}
int main(){
	//Sprawdza czyœ³owa/liczby s¹ anagramami 
	string a, b;
	cout<<"Podaj wyraz/liczbe a"<<endl;
	cin>>a;
	cout<<"Podaj wyraz/liczbe b"<<endl;
	cin>> b;
	
	cout<<"1-Jest anagramem, 0-Nie jest anagramem"<<endl;
	cout<<czy_anag(a,b)<<endl;
}
