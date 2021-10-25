#include <iostream>
using namespace std;
int main(){
	int n=6;
	int tab[6]={7,6,4,3,2,1};
	bool st=1, r=1, m=1, nr=1, nm=1;
	for(int i=0; i<n-1; i++){
		if(tab[i]!=tab[i+1]){
			st=0;
			if(tab[i]<tab[i+1]){
				m=0;
				nr=0;
			}
			else {
				r=0;
				nm=0;
			}	
		}else {
		r=0;
		m=0;
		}
	}
	if(st){
		cout<<"Ciag jest staly"<<endl;
	}else if(r){
		cout<<"Ciag jest rosnacy"<<endl;
	}else if(m){
		cout<<"Ciag jest malejacy"<<endl;
	}else if(nr){
		cout<<"Ciag jest nierosnacy"<<endl;
	}else if(nm){
		cout<<"Ciag jest niemalejacy"<<endl;
	}
	
}
