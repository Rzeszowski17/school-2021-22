#include <iostream>
using namespace std;
int horner(int wsp[], int st, int x){
	int war=wsp[0];
	for(int i=1; i<=st; i++){
		war=x*war+wsp[i];
	}
	return war;
}
int main(){
	//x->sytsme od 2 do 9, st->najwy¿szy stopieñ, wsp[]->wspó³czynik
	//zamiana liczby dziesiêtnej na system liczbiwy od 2 do 9 
	int x=8, st=1;
	int wsp[]= {1,2};
	cout<<horner(wsp, st, x)<<endl;
}
