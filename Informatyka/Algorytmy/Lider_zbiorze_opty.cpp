#include<iostream>
using namespace std;

int szukaj_lidera(int tab[],int n)
{
	int lider = tab[0], do_pary = 1;

	for(int i=1;i<n;i++)
  if(do_pary > 0)
		if(tab[i]==lider) 
			++do_pary; 
		else
			--do_pary; 
	else
	{
		++do_pary;
		lider = tab[i];
	}

	if(do_pary==0)
		return -1; 
	
	int ile = 0; 
	
	for(int i=0;i<n;i++)  
		if(tab[i]==lider) 
			++ile;
	
	if(ile>n/2) 
		return lider;
		
	return -1;
}

int main()
{
	int n, *tab, lider;
	
	cout<<"Ile liczb chcesz wczytaæ? ";
	cin>>n;
	
	tab = new int [n];
	
	for(int i=0;i<n;i++)
		cin>>tab[i];
	
	lider = szukaj_lidera(tab,n);
	
	if(lider==-1)
		cout<<"Zbiór nie posiada lidera"<<endl;
	else
		cout<<"Liderem zbioru jest "<<lider<<endl;
		
	delete [] tab;  
	
	return 0;
}
