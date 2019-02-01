<?php
   $cities4 = [
       'Tokijas',
       'Vasingtonas',
       'Maskva',
       'Londonas'
   ];

   print_r($cities4);

?>


<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP5</title>
</head>

<body>
     <p>
         <?php
            echo count($cities4);
         
         ?>
     </p>
     
      <ul>
          <?php
            for ($i = 0; $i < count($cities4); $i++) {
                echo "<li>$cities4[$i]</li>";
            }
          
          ?>
      </ul>
</body>
</html>