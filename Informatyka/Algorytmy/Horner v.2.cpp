#include <iostream>

using namespace std;

/*
string zamiana(int a[],int n, int p){
    int d=a[0];
        for(int i=1; i<=n; i++)
            d=d*p+a[i];

    string osemkowy="";
    while(d){
        osemkowy=char(d%8+48)+osemkowy;
        d/=8;
    }
    return osemkowy;
}

*/

void zamiana(int a[],int n, int p){
    int d=a[0];
        for(int i=1; i<=n; i++)
            d=d*p+a[i];

    int x =8, m=1;
    while(x<d){
        m++;
        x*=8;
    }
    int b[m];
    int w=0;
    while(w<=m){
        b[w]=d%8;
        d/=8;
        w++;
    }

    for(int g=m+1;g>=0;g--)
            cout<<b[g];
}

int main()
{
    int a[6]{1,0,0,0,0,1};
    zamiana(a,5,2);

    // cout<<'H'<<int('H')<<(int)'H'<<'H'+0;
    // cout<<0<<char(48)<<(char)48;

    return 0;
}

