<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 16.2</title>
</head>
<body>
    <?php
        $data= json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143'),true);

        foreach($data as $nombre=>$valor){

            if(!is_array($valor)){
                print "campo $nombre : valor $valor<br>";
            }
            else{
                print "campo $nombre : [";

                foreach($valor as $valor_array){
                    if(!is_array($valor_array)){
                        print "valor: $valor_array, ";
                    }
                    else{
                        print "<arreglo>";
                    }
                    print "] <br>";
                }
            }

        }
    ?>
</body>
</html>