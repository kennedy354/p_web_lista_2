<html>
    <head>

    </head>
    <body>
        <?php
            $li = $_GET["linhas"];
            $co = $_GET["colunas"];
            

            $table='<table border="4">';
            $col='<tr>';
            $lin='<td>. O .</td>';
            $cole='</tr>';
            $tablee='</table>';

            echo $table;
            for($i=0;$i<$li;$i++){
                echo $col;
                for($j=0;$j<$co;$j++){
                    echo $lin;
                }
                echo $cole;
            }
            echo $tablee; 
        ?>
    </body>
</html>
