<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" HREF="css/estilo.css">
    <title>Laboratorio 9.2</title>
</head>
<body>
    <H1>Consulta de Noticias </H1>

    <FORM NAME="FormFiltro" METHOD="post" ACTION="lab-92.php">
        Filtrar por: <SELECT NAME="campos">
            <OPTION value="texto" SELECTED> Descripcion
            <OPTION value="titulo">Titulo
            <OPTION Value="categoria">Categoria
        </SELECT>
        Con el valor: 
        <input TYPE="text" NAME="valor">
        <INPUT NAME="ConsultarFiltro" VALUE="Filtrar Datos" TYPE="submit"/>
        <INPUT NAME="ConsultarTodos" VALUE="Ver todos" TYPE="submit"/>
    </FORM>
    <?php
        require_once("class/noticias.php");

        $obj_not= new Noticia();
        $noticia = $obj_not->consultar_noticias();
        
        if(array_key_exists('ConsultarTodos',$_POST)){
            $obj_not= new Noticia();
            $noticias_new = $obj_not->consultar_noticias();
        }

        if(array_key_exists('ConsultarFiltro',$_POST)){
            $obj_not= new Noticia();
            $noticia = $obj_not->consultar_noticias_filtro($_REQUEST['campos'],$_REQUEST['valor']);
        }

        $nfilas= count($noticia);

        if($nfilas>0){
            print("<TABLE>\n");
            print("<TR>\n");
            print("<TH>TITULO</TH>\n");
            print("<TH>TEXTO</TH>\n");
            print("<TH>CATEGORIAS</TH>\n");
            print("<TH>FECHA</TH>\n");
            print("<TH>IMAGEN</TH>\n");
            print("</TR>\n");

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
            }
            print("</TABLE>\n");
        }
        else{
            print("No available news");
        }
        
    ?>
</body>
</html>