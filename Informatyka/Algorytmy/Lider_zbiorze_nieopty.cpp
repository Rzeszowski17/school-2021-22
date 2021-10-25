#include<iostream>
using namespace std;
int main(){
	int x=10;
	int tab1[x]={1,3,2,3,3,3,2,2,3,2};
	
	int tab2[4]{};
	
	for (int j=0; j<x; j++){
		tab2[tab1[j]]++;
	}
	
	for(int i=0; i<4; i++){
	cout<<tab2[i]<<endl;
	}
	int max=tab2[0];
	int tlider=0;
	for(int a=0; a<4; a++){
		if(max < tab2[a])
		{
			max = tab2[a];
			tlider=a;
		}
	}
	cout<<"Najwieksza liczba to: "<<max<<endl;
	
	int wyn=x/2;
	if(wyn<max){
		cout<<"Zbiór posjada lidera i jest nim "<<tlider<<endl;
	}else{
		cout<<"Zbior nie posiada lidera"<<endl;
	}
	
	return 0;
}
