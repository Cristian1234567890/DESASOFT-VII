<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" HREF="jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="jquery-3.1.1.js"></script>
    <script type="text/javascript" language="javascript" src="jquery.dataTables.min.js"></script>
    <title>Laboratorio 15.1</title>
</head>
<body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#grid').DataTable({
                "lengthMenu":[5,10,20,50],
                "order":[[0,"asc"]],
                "language":{
                    "lengthMenu":"Mostrar _MENU_ registros por pagina",
                    "zeroRecords":"No existen resultados en su busqueda",
                    "info":"Mostrado pagina _PAGE_ de _PAGE_",
                    "infoEmpty":"No hay registros disponibles",
                    "infoFiltered":"(Buscado entre _MAX_ registros en total)",
                    "search": "Buscar: ",
                    "paginate":{
                        "first":"Primero",
                        "last":"Ultimo",
                        "next":"Siguiente",
                        "previous":"Anterior"
                    },
                }
            });

            $("*").css("font-family","arial").css('font-size','12px');
        });
    </script>

    <H1>Consulta de Noticias </H1>
    <?php
        require_once("class/noticias.php");

        $obj_not= new Noticia();
        $noticia = $obj_not->consultar_noticias();

        $nfilas= count($noticia);

        if($nfilas>0){
            print("<TABLE id='grid' class='display' cellspacing='0'>\n");
            print("<THEAD>");
            print("<TR>\n");
            print("<TH>TITULO</TH>\n");
            print("<TH>TEXTO</TH>\n");
            print("<TH>CATEGORIAS</TH>\n");
            print("<TH>FECHA</TH>\n");
            print("<TH>IMAGEN</TH>\n");
            print("</TR>\n");
            print("</THEAD>");
            print("<TBODY>");
            foreach ($noticia as $res){
                print("<TR>\n");
                print("<TD>".$res['titulo']."</TD>\n");
                print("<TD>".$res['texto']."</TD>\n");
                print("<TD>".$res['categoria']."</TD>\n");
                print("<TD>".date("j/n/Y",strtotime($res['fecha']))."</TD>\n");

                if($res['imagen']!=""){
                    print("<TD><A TARGET ='_blank' HREF='img/".$res['imagen']."'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
                }
                else{
                    print("<TD>&nbsp</TD>\n");
                }
                print("</TR>\n");
                print("</TBODY>");
            }
            print("</TABLE>\n");
        }
        else{
            print("No available news");
        }
        
    ?>

</body>
</html>