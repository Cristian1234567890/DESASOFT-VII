<html>
    <head>
        <title>Laboratorio 5.1</title></head>
    
    <body>
        <?php
        if($_FILES['nombre_archivo_cliente']['size']<1000000){
            if($_FILES['nombre_archivo_cliente']['type']=="image/jpeg"||$_FILES['nombre_archivo_cliente']['type']=="image/jpg"||$_FILES['nombre_archivo_cliente']['type']=="image/png"||$_FILES['nombre_archivo_cliente']['type']=="image/gif")
            {   
            
            if(is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'])){
                $nombreDirectorio = "archivos/";
                $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
                $nombreCompleto = $nombreDirectorio.$nombrearchivo;
    
                if(is_file($nombreCompleto)){
                    $idUnico = time();
                    $nombrearchivo = $idUnico . "-".$nombrearchivo;
                        echo"Archivo repetido se cambiara el nombre a $nombrearchivo <br><br>";
                }
    
                move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'],$nombreDirectorio . $nombrearchivo);
    
                echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
            }
    
            else{
                echo "No se ah podido subir el archivo <br>";
            }
            }
            else {
                echo "Solo se permiten archivos tipo jpg, jpeg, gif o png! <br><br>";
                echo "Tipo: ".$_FILES['nombre_archivo_cliente']['type'];
            }
        }
        else{
            header('Location:lab52.html');
        }
        
        
        ?>    
    </body>

</html>