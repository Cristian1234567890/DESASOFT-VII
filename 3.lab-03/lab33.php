<html>
    <head>
        <title>Laboratorio 3.3</title></head>
    
    <body>
        <?php
            if(array_key_exists('enviar', $_POST)){
                if($_REQUEST['Apellido']!=""){
                echo "El apellido ingresado es: $_REQUEST[Apellido]";
                }
                else
                {
                    echo "Por favor coloque el Apellido";
                }
                echo "<br>";
                if($_REQUEST['Nombre']!=""){
                    echo "El nombre Ingresado es: $_REQUEST[Nombre]";
                }
                else{
                    echo "Por Favor coloque el nombre";
                }
            }
            else{
        ?>    
        <FORM ACTION ="lab33.php" METHOD="POST">
            Nombre: <input TYPE = "text" name="Nombre"><br>
            Apellido: <input Type ="text" name="Apellido"><br>
            <input type="submit" name="enviar" value="Enviar datos">

        </FORM>
        
        <?php
        }?>
        
    </body>

</html>