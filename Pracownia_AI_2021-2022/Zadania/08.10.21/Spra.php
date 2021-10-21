<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Sprawdź pesel</title>
</head>
<body>
    <div id="logo">
        <h1>Biblioteka podręczników</h1> 
    </div>
    <div id="menu1">
        <a href="Spis.php">Spis wypożyczeń</a>
        <br>
        <a href="Stat.php">Statystyki</a>
        <br>
        <a href="Spra.php">Sprawdź pesel</a>
    </div>
    <div id="main">
        <h2>PESEL</h2>
        <p>W numerze PESEL zawarta jest informacja o płci osoby. 
           Jeżeli przedostatnia cyfra numeru
           jest parzysta, to PESEL należy do kobiety, jeśli nieparzysta, to do mężczyzny.</p>
        <p>Formularz ma wyświetlić płeć osoby której pesel wpiszemy w formularzu</p>
        <form method="POST">
            PESEL: <input type="number" maxlength="12">
            <input type="submit" value=Prześlij>
        </form>
    </div>
    <div id="menu2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sequi cupiditate qui sapiente deserunt dignissimos, repellat optio magni, commodi enim eos dolor doloremque asperiores rem excepturi provident laborum! Omnis, voluptas.
    </div>
    <footer>Bibliotek podręczników &copy Wszelkie prawa zastrzeżone Kacper Rzeszowski 4B2T</footre>
</body>
</head>