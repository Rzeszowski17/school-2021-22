
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Prezenty Świąteczne</title>
    <script>
        var Prezent=[];
        var Cena=[];
        <?php
            $connect = new mysqli("localhost", "root", "", "baza1");
            $sql = "SELECT * FROM `prezenty`";
            $result = $connect->query($sql);
            while($row = $result->fetch_assoc()){
                echo "Prezent.push('".$row['NAZWA']."');";
                echo "Cena.push(".$row['CENA'].");";
            }
        ?>
    </script>
</head>
<body>
    <div class="baner1">
		<h1>PREZENTY ŚWIĄTECZNE</h1>
	</div>
	<div class="baner2"></div>
	<div class="lewy1" id="lewy1">
		<h2>TWÓJ KOSZYK</h2>
		<script>
         var lew = document.getElementById("lewy1");
            for(var i=0; i<Prezent.length; i++){
                lew.innerHTML+=Prezent[i]+" <input type='checkbox' name='pre' value='"+Cena[i]+"'> ";
                if(i>1){
                    lew.innerHTML+="Sztuk <input type='text' name='szt' onkeypress='return event.charCode >= 48 && event.charCode <= 57''>";
                }
                lew.innerHTML+="<br>";
            }   
        </script><br>
        <input type="button" id="but" value="Suma">
	</div>
	<div class="prawy1">
		<h2 id="kwota">KWOTA DO ZAPŁATY:</h2>
        <p id="kwo"></p>
        <script>
            var but = document.getElementById("but");
            var kwo = document.getElementById("kwo");
            but.onclick=function(){
                var sum = 0;
                var pre = document.getElementsByName("pre");
                var szt = document.getElementsByName("szt");
                for(i=0; i<4; i++){
                    if(pre[i].checked){
                        if(i<2){
                            sum+=parseInt(pre[i].value);
                        }
                        else{
                            sum+=parseInt(pre[i].value)*parseInt(Math.ceil(szt[i-2].value));
                        }
                    }
                }
                kwo.innerHTML = sum+" zł";
            }
        </script>
	</div>
	<div class="stopka"></div>
</body>
</html>