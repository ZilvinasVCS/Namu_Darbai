<?php

    if(isset($_POST['submit'])) {
        function result($num1, $num2) {
            $plotis = $num1 * $num2;
            return $plotis;
        };
        $rezultatas = result($_POST['ilgis'], $_POST['plotis']);
        echo "Jusu rezultatas yra: $rezultatas";
        exit();
    };
?>


<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
      <form action="<?php $_PHP_SELF; ?>" method="POST">
       <input type="text" name="ilgis">
       <input type="text" name="plotis">
       <button type="submit" style="padding:20px 40px" name="submit">Lets See</button>
      </form>
    
</body>
</html>