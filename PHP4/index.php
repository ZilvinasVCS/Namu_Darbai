<?php
    $cities = array("Berlynas", "Roma", "Londonas");
    
    $cities[] = "Tokijas";

    $cities2 = [
       'Tokijas' => '13.6',
       'Vasingtonas' => '0.6',
       'Maskva' => '11.5'
    ];

    $cities2[] = "Maskva";

?>



<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4(1)</title>
</head>

<body>
   <ul>
       <li></li>
       <li><?php echo $cities[1] ?></li>
       <li></li>
   </ul>
   
   <ul>
       <li><?php echo '"Gyventoju skaicius: '.$cities2['Maskva'].' mln"' ?></li>
   </ul>            
</body>
</html>