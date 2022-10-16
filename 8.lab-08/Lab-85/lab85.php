<html>
    <head>
        <title>Laboratorio 8.5</title></head>
    
    <body>
        <?php

            include('class_lib.php');
            if(array_key_exists('enviar', $_POST)){
                
                if($_REQUEST['num']!=""){
                    $m_size = $_REQUEST['num'];
                    if($m_size>1){
                        
                        $objUni= new Unitario($m_size);

                        $objUni->createTable();

                    }
                    else{
                        echo "Ingrese un Numero mayor a 1!";
                    }
                }
            }
            ?>
        <FORM ACTION="lab85.php" METHOD="POST">

            <br><br>Ingrese el tamaño de la matriz : <input type="text" name="num"><br><br>
            <input type="submit" name= "enviar" value="Ingresar">

        </FORM>
  
    </body>

</html>