<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method = "POST">
        <?php
            echo"<table border='1' CELLSPACING=0 bordercolor=blue /> \n";
            $num=1;
            
          
                echo "<tr>";
                for($c=1; $c <=9; $c++)
                {
                    echo"<td><a href='http://localhost/practicprog5/Linkimag.php?txttabla=".$num."'>$num<img src=imag/01Captura.PNG width=200px height=80px></a></td>\t \t \t ";
                    $num++;
                } 
                echo"</tr> \n"; 
            
            echo"</table>";
            echo"</form>";

            if(isset($_GET["txttabla"]))
            {
            $tabla=$_GET["txttabla"];
            echo"<table border='1'/> \n";
          
            $i=10;
            while($i >=1)
            
            {
                $resultado=$i*$tabla;
                echo"<tr><td> $i </td> <td> X </td> <td> $tabla</td>";
                echo"<td> = </td> <td> $resultado </td> </tr> \n";
                $i--;
            }
            echo"</table>";
            }
 
    ?>
    
</body>
</html>