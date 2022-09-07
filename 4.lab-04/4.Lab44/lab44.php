<html>
    <head>
        <title>Laboratorio 4.4</title></head>
    
    <body>
        <?php
            $a_num= array();
            $i=1;
            if(array_key_exists('enviar', $_POST)){
                
                if($_REQUEST['num']!=""){
                    $n = $_REQUEST['num'];
                    if($n%2==0){
                        $a_num[$i]=$n;
                        echo "Numero ingresado es: ".$a_num[$i];
                        $i=$i+1;
                    }
                    else{
                        echo "Ingrese un Numero Par!";
                    }
                    echo " valor de I es: ".$i;
                }
            }
            ?>
        <FORM ACTION="lab44.php" METHOD="POST">

            <br><br>Ingrese un Numero par: <input type="text" name="num"><br><br>
            <input type="submit" name= "enviar" value="Ingresar">

        </FORM>
  
    </body>

</html>