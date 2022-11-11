<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" HREF="css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 16.1</title>
</head>
<body>
    <h1>Consulta de servicio web de conversion de Temperatura</h1>
    <FORM NAME="FormConv" METHOD ="POST" action="Lab161.php">
        </br>
        CONVERTIR DESDE <SELECT NAME="temp">
            <OPTION value= "CtoF" SELECTED>ºC a ºF
            <OPTION value= "FtoC">ºF a ºC
            </SELECT>El valor 
            <input TYPE="number" NAME="valor" step="Any" required>
            <INPUT NAME="Convertir" value="Convertir" TYPE="submit"/>
    </FORM>
    <?php
        $servicio = "https://www.w3schools.com/xml/tempconvert.asmx?wsdl";
        $parametros=array();
        if(array_key_exists('Convertir',$_POST)){
            $valor= $_POST['valor'];
            $temp= $_POST['temp'];

            if($temp=="CtoF"){
                $parametros['Celsius']=$valor;
                $cliente = new SoapClient($servicio,$parametros);
                $resultObj= $cliente->CelsiusToFahrenheit($parametros);
                $resultado= $resultObj->CelsiusToFahrenheitResult;
            }
            else{
                $parametros['Fahrenheit']=$valor;
                $cliente = new SoapClient($servicio,$parametros);
                $resultObj= $cliente->FahrenheitToCelsius($parametros);
                $resultado= $resultObj->FahrenheitToCelsiusResult;
            }

            print("<BR> La temperatura $valor".substr($temp,0,1)." es igual a: $resultado".substr($temp,3,1));

        }
    ?>
</body>
</html>