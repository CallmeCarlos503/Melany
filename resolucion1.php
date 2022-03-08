<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<br><br>
<div class="container">
  <div class="row align-items-start">
  
    <div class="col-8">
    <table border="1" cellspacing=0 bordercolor="blue">
        <?php
        $num = 1;
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            $Cont = 1;
            while ($Cont <= 3) {
                echo "<td>";
                echo "<a href=resolucion1.php?N=$num>$num.<img src='img/cf37c837-a148-49ee-a5ca-0122dac220a6.jpg' width='200px' height='120px' alt=''></a>";
                echo "</td>";
                $Cont++;
                $num++;
            }
            echo "</tr>";
        }
        ?>

    </table>
    </div>
    <div class="col-4">
    <?php
    if (isset($_GET["N"])) {
    ?>
    <br><br>
        <table class="table table-hover table-dark table-striped">
            <?php
            $num2=1;
             for ($i2=0; $i2 < 5 ; $i2++) { 
                 echo"<tr>";
                 $cont2=1;
                 while ($cont2 <= 2) {
                     echo "<td>";
                     echo $_GET["N"]."X".$num2."=".$_GET["N"]*$num2;
                     echo "</td>";
                     $cont2++;
                     $num2++;
                 }
                 echo"</tr>";
             }
            ?>
        </table>
    <?php
    }
    ?>
    </div>
  </div>
</div>    
</body>

</html>