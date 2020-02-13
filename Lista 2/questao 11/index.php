<html>
    <head>

    </head>
    <body>
        <?php
            $table='<table border="4">';
            $col='<tr>';
            $lin='<td>. O .</td>';
            $cole='</tr>';
            $tablee='</table>';

            echo $table;
            for($i=0;$i<10;$i++){
                echo $col;
                for($j=0;$j<5;$j++){
                    echo $lin;
                }
                echo $cole;
            }
            echo $tablee; 
        ?>
    </body>
</html>
