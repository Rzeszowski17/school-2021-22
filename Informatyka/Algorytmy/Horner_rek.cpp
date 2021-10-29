#include <iostream>
using namespace std;
int horner(int wsp[], int st, int x){
	if(st==0)
		return wsp[0];
	return x*horner(wsp,st-1,x)+wsp[st];
}
int main(){
	//x->sytsme od 2 do 9, st->najwy¿szy stopieñ, wsp[]->wspó³czynik
	//zamiana liczby dziesiêtnej na system liczbiwy od 2 do 9 
	int x=8, st=1;
	int wsp[]= {1,2};
	cout<<horner(wsp, st, x)<<endl;
}
